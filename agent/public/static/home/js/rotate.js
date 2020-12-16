﻿function Rotate(config) {
    /// <summary>
    /// 轮播类
    /// </summary>
    /// <param name="config">参数json对象:(stayTime:停留时间(若不传，就不自动播放),actionTime:动作时间(default:1000),wrap:轮播镜框,nvs:导航点，nvclass:导航点活动样式(default:active),width:单项宽)</param>
    /// <returns></returns>
    this.stayTime = config.stayTime;
    this.actionTime = config.actionTime ? config.actionTime : 1000;
    this.wrap = config.wrap,
    this.itemW = config.width | 0;
    this.itemArray = [];
    //1正在运行 0空闲 
    this.nvs = config.nvs;
    this.nvclass = config.nvclass || 'active';
    this.timeIndex = -1;

    //底图
    this.baseImg = null;

    //运行效果
    this.effect = config.effect || 'move';

    //上一张
    this.pre = function () {
        var oThis = this;
        oThis.stayTime && clearInterval(oThis.timeIndex);
        if (oThis.effect == 'fade') {
            fadeEffect.pre.call(oThis);
        } else {
            moveEffect.pre.call(oThis);
        }
    };

    //下一张
    this.next = function () {
        var oThis = this;
        oThis.stayTime && clearInterval(oThis.timeIndex);
        if (oThis.effect == 'fade') {
            fadeEffect.next.call(oThis);
        } else {
            moveEffect.next.call(oThis);
        }
    };

    //特定张
    this.custom = function (i) {
        var oThis = this;
        oThis.stayTime && clearInterval(oThis.timeIndex);
        if (oThis.effect == 'fade') {
            fadeEffect.curstom.call(oThis, i);
        } else {
            moveEffect.curstom.call(oThis, i);
        }

    };



    //私有方法
    var rotatePrivate = {
        //初始化
        init: function (con) {
            var oThis = this;
            for (var i = 0; i < con.items.length; i++) {
                var item = $(con.items[i]);
                var nv = con.nvs ? $(con.nvs[i]) : null;
                var itemO = { item: item, index: i, nv: nv };
                oThis.itemArray.push(itemO);
            }
            rotatePrivate.timeRun.call(oThis);
        },

        //自动播放
        timeRun: function () {
            var oThis = this;
            if (oThis.stayTime && oThis.itemArray.length > 1) {
                clearInterval(oThis.timeIndex);
                oThis.timeIndex = setInterval(function () {
                    if (oThis.effect == 'fade') {
                        fadeEffect.next.call(oThis);
                    } else {
                        moveEffect.next.call(oThis);
                    }
                }, oThis.stayTime);
            }
        },

        //清空所有导航活动样式
        clealNvActive: function (i) {
            this.nvs && (this.nvs.removeClass(this.nvclass) && $(this.nvs[i]).addClass(this.nvclass));
        },

        //从新排序
        sortItem: function (customItem) {
            var oThis = this;
            var newArray = [customItem];
            var currentItem = customItem;
            //后面的加上
            for (var h = (customItem.index + 1) ; h < oThis.itemArray.length; h++) {
                for (var k = 0; k < oThis.itemArray.length; k++) {
                    var afterIndex = oThis.itemArray[k].index;
                    if (afterIndex == h) {
                        var afterItem = oThis.itemArray[k];
                        newArray.push(afterItem);
                        currentItem.item.after(afterItem.item);
                        currentItem = afterItem;
                    }
                }
            }

            //前面的加上
            for (var m = 0; m < customItem.index; m++) {
                for (var n = 0; n < oThis.itemArray.length; n++) {
                    var beforeIndex = oThis.itemArray[n].index;
                    if (beforeIndex == m) {
                        var beforeItem = oThis.itemArray[n];
                        newArray.push(beforeItem);
                        currentItem.item.after(beforeItem.item);
                        currentItem = beforeItem;
                    }
                }
            }
            oThis.itemArray = newArray;
        }

    };

    //move effect method assemble
    var moveEffect = {
        pre: function () {
            var oThis = this;
            //找到最后一张，并移到第一张
            var lastItem = oThis.itemArray.pop();
            oThis.wrap.prepend(lastItem.item);
            oThis.wrap.css('margin-left', -oThis.itemW);
            rotatePrivate.clealNvActive.call(oThis, lastItem.index);
            oThis.wrap.animate({ marginLeft: 0 }, {
                duration: oThis.actionTime,
                easing: 'easeInOutQuint',
                complete: function () {
                    //变化数组
                    oThis.itemArray.splice(0, 0, lastItem);
                    rotatePrivate.timeRun.call(oThis);
                }

            });
        },

        next: function () {
            var oThis = this;
            var firstItem = oThis.itemArray.shift();
            oThis.itemArray.push(firstItem);
            rotatePrivate.clealNvActive.call(oThis, oThis.itemArray[0].index);
            //移动wrap到第二个元素
            oThis.wrap.animate({ marginLeft: -oThis.itemW }, {
                duration: oThis.actionTime,
                easing: 'easeInOutQuint',
                complete: function () {
                    //第一元素移到最后
                    oThis.wrap.append(firstItem.item);
                    oThis.wrap.css('margin-left', 0);
                    rotatePrivate.timeRun.call(oThis);
                }
            });
        },

        curstom: function (i) {
            var oThis = this;
            var customItem = null;
            for (var h in oThis.itemArray) {
                if (oThis.itemArray[h].index == i) {
                    customItem = oThis.itemArray[h];
                    break;
                }
            }
            var firstItem = oThis.itemArray[0];
            //在活动的后面
            if (customItem.index > firstItem.index) {
                //把curstomItem移到后面
                firstItem.item.after(customItem.item);
                rotatePrivate.clealNvActive.call(oThis, customItem.index);
                //foucus move to curstomitem
                oThis.wrap.animate({ marginLeft: -oThis.itemW }, {
                    duration: oThis.actionTime,
                    complete: function () {
                        //sort by customitem
                        rotatePrivate.sortItem.call(oThis, customItem);
                        oThis.wrap.css('margin-left', 0);
                        rotatePrivate.timeRun.call(oThis);
                    }
                });
            } else {
                //把curstomItem移到当前的前面，并margin-left -itemWidth
                firstItem.item.before(customItem.item);
                oThis.wrap.css('margin-left', -oThis.itemW);
                rotatePrivate.clealNvActive.call(oThis, customItem.index);
                //foucus move to curstomitem
                oThis.wrap.animate({ marginLeft: 0 }, {
                    duration: oThis.actionTime,
                    complete: function () {
                        //sort by customitem
                        rotatePrivate.sortItem.call(oThis, customItem);
                        rotatePrivate.timeRun.call(oThis);
                    }
                });
            }
        }
    };

    //fade effect method assemble
    var fadeEffect = {
        pre: function () {
            var oThis = this;
            //找到目前第一张，并clone
            var firstClone = oThis.itemArray[0].item.clone();
            firstClone.addClass('rotate-trans');
            firstClone.removeClass('rotate-item');
            oThis.wrap.append(firstClone);
            //找到最后一张，并移到第一张
            var lastItem = oThis.itemArray.pop();
            oThis.wrap.prepend(lastItem.item);
            rotatePrivate.clealNvActive.call(oThis, lastItem.index);
            firstClone.animate({ opacity: 0 }, {
                duration: oThis.actionTime,
                complete: function () {
                    //移走clone
                    firstClone.remove();
                    //变化数组
                    oThis.itemArray.splice(0, 0, lastItem);
                    rotatePrivate.timeRun.call(oThis);
                }
            });
        },

        next: function () {
            var oThis = this;
            var firstItem = oThis.itemArray.shift();
            oThis.itemArray.push(firstItem);
            //将第一个clone一个，覆在上面
            var firstClone = firstItem.item.clone();
            firstClone.addClass('rotate-trans');
            firstClone.removeClass('rotate-item');
            oThis.wrap.append(firstClone);
            //first ele move to last
            oThis.wrap.append(firstItem.item);
            var secondItem = oThis.itemArray[0];
            rotatePrivate.clealNvActive.call(oThis, secondItem.index);
            firstClone.animate({ opacity: 0 }, {
                duration: oThis.actionTime,
                complete: function () {
                    //移走clone
                    firstClone.remove();
                    rotatePrivate.timeRun.call(oThis);
                }
            });
        },

        curstom: function (i) {
            var oThis = this;
            var customItem = null;
            for (var h in oThis.itemArray) {
                if (oThis.itemArray[h].index == i) {
                    customItem = oThis.itemArray[h];
                    break;
                }
            }
            //找到目前第一张，并clone
            var firstClone = oThis.itemArray[0].item.clone();
            firstClone.addClass('rotate-trans');
            firstClone.removeClass('rotate-item');
            oThis.wrap.append(firstClone);

            //customItem move to first
            oThis.wrap.prepend(customItem.item);
            rotatePrivate.clealNvActive.call(oThis, customItem.index);
            firstClone.animate({ opacity: 0 }, {
                duration: oThis.actionTime,
                complete: function () {
                    //移走clone
                    firstClone.remove();
                    //sort by customitem
                    rotatePrivate.sortItem.call(oThis, customItem);
                    rotatePrivate.timeRun.call(oThis);
                }
            });
        }
    };

    rotatePrivate.init.call(this, config);

}


