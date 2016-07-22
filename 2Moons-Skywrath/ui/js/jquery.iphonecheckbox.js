/* iPhone Style Checkbox */
(function(){var a;var b=Array.prototype.slice;a=function(){function a(b,c){var d,e,f;this.elem=$(b);e=$.extend({},a.defaults,c);for(d in e){f=e[d];this[d]=f}this.elem.data(this.dataName,this);this.wrapCheckboxWithDivs();this.attachEvents();this.disableTextSelection();if(this.resizeHandle){this.optionallyResize("handle")}if(this.resizeContainer){this.optionallyResize("container")}this.initialPosition()}a.prototype.isDisabled=function(){return this.elem.is(":disabled")};a.prototype.wrapCheckboxWithDivs=function(){this.elem.wrap("<div class='"+this.containerClass+"' />");this.container=this.elem.parent();this.offLabel=$("<label class='"+this.labelOffClass+"'>\n  <span>"+this.uncheckedLabel+"</span>\n</label>").appendTo(this.container);this.offSpan=this.offLabel.children("span");this.onLabel=$("<label class='"+this.labelOnClass+"'>\n  <span>"+this.checkedLabel+"</span>\n</label>").appendTo(this.container);this.onSpan=this.onLabel.children("span");return this.handle=$("<div class='"+this.handleClass+"'>\n  <div class='"+this.handleRightClass+"'>\n    <div class='"+this.handleCenterClass+"' />\n  </div>\n</div>").appendTo(this.container)};a.prototype.disableTextSelection=function(){if($.browser.msie){return $([this.handle,this.offLabel,this.onLabel,this.container]).attr("unselectable","on")}};a.prototype._getDimension=function(a,b){if($.fn.actual!=null){return a.actual(b)}else{return a[b]()}};a.prototype.optionallyResize=function(a){var b,c,d;d=this._getDimension(this.onLabel,"width");c=this._getDimension(this.offLabel,"width");if(a==="container"){b=d>c?d:c;b+=this._getDimension(this.handle,"width")+this.handleMargin;return this.container.css({width:b})}else{b=d>c?d:c;return this.handle.css({width:b})}};a.prototype.onMouseDown=function(b){var c;b.preventDefault();if(this.isDisabled()){return}c=b.pageX||b.originalEvent.changedTouches[0].pageX;a.currentlyClicking=this.handle;a.dragStartPosition=c;return a.handleLeftOffset=parseInt(this.handle.css("left"),10)||0};a.prototype.onDragMove=function(b,c){var d,e;if(a.currentlyClicking!==this.handle){return}e=(c+a.handleLeftOffset-a.dragStartPosition)/this.rightSide;if(e<0){e=0}if(e>1){e=1}d=e*this.rightSide;this.handle.css({left:d});this.onLabel.css({width:d+this.handleRadius});this.offSpan.css({marginRight:-d});return this.onSpan.css({marginLeft:-(1-e)*this.rightSide})};a.prototype.onDragEnd=function(b,c){var d;if(a.currentlyClicking!==this.handle){return}if(this.isDisabled()){return}if(a.dragging){d=(c-a.dragStartPosition)/this.rightSide;this.elem.prop("checked",d>=.5)}else{this.elem.prop("checked",!this.elem.prop("checked"))}a.currentlyClicking=null;a.dragging=null;return this.didChange()};a.prototype.refresh=function(){return this.didChange()};a.prototype.didChange=function(){var a;if(typeof this.onChange==="function"){this.onChange(this.elem,this.elem.prop("checked"))}if(this.isDisabled()){this.container.addClass(this.disabledClass);return false}else{this.container.removeClass(this.disabledClass)}a=this.elem.prop("checked")?this.rightSide:0;this.handle.animate({left:a},this.duration);this.onLabel.animate({width:a+this.handleRadius},this.duration);this.offSpan.animate({marginRight:-a},this.duration);return this.onSpan.animate({marginLeft:a-this.rightSide},this.duration)};a.prototype.attachEvents=function(){var a,b,c;c=this;a=function(a){return c.onGlobalMove.apply(c,arguments)};b=function(d){c.onGlobalUp.apply(c,arguments);$(document).unbind("mousemove touchmove",a);return $(document).unbind("mouseup touchend",b)};this.elem.change(function(){return c.refresh()});return this.container.bind("mousedown touchstart",function(d){c.onMouseDown.apply(c,arguments);$(document).bind("mousemove touchmove",a);return $(document).bind("mouseup touchend",b)})};a.prototype.initialPosition=function(){var a,b;a=this._getDimension(this.container,"width");this.offLabel.css({width:a-this.containerRadius});b=this.containerRadius+1;if($.browser.msie&&$.browser.version<7){b-=3}this.rightSide=a-this._getDimension(this.handle,"width")-b;if(this.elem.is(":checked")){this.handle.css({left:this.rightSide});this.onLabel.css({width:this.rightSide+this.handleRadius});this.offSpan.css({marginRight:-this.rightSide})}else{this.onLabel.css({width:0});this.onSpan.css({marginLeft:-this.rightSide})}if(this.isDisabled()){return this.container.addClass(this.disabledClass)}};a.prototype.onGlobalMove=function(b){var c;if(!(!this.isDisabled()&&a.currentlyClicking)){return}b.preventDefault();c=b.pageX||b.originalEvent.changedTouches[0].pageX;if(!a.dragging&&Math.abs(a.dragStartPosition-c)>this.dragThreshold){a.dragging=true}return this.onDragMove(b,c)};a.prototype.onGlobalUp=function(b){var c;if(!a.currentlyClicking){return}b.preventDefault();c=b.pageX||b.originalEvent.changedTouches[0].pageX;this.onDragEnd(b,c);return false};a.defaults={duration:200,checkedLabel:"ON",uncheckedLabel:"OFF",resizeHandle:true,resizeContainer:true,disabledClass:"iPhoneCheckDisabled",containerClass:"iPhoneCheckContainer",labelOnClass:"iPhoneCheckLabelOn",labelOffClass:"iPhoneCheckLabelOff",handleClass:"iPhoneCheckHandle",handleCenterClass:"iPhoneCheckHandleCenter",handleRightClass:"iPhoneCheckHandleRight",dragThreshold:5,handleMargin:15,handleRadius:4,containerRadius:5,dataName:"iphoneStyle",onChange:function(){}};return a}();$.iphoneStyle=this.iOSCheckbox=a;$.fn.iphoneStyle=function(){var c,d,e,f,g,h,i,j,k,l,m,n;c=1<=arguments.length?b.call(arguments,0):[];e=(k=(l=c[0])!=null?l.dataName:void 0)!=null?k:a.defaults.dataName;m=this.filter(":checkbox");for(i=0,j=m.length;i<j;i++){d=m[i];f=$(d).data(e);if(f!=null){g=c[0],h=2<=c.length?b.call(c,1):[];if((n=f[g])!=null){n.apply(f,h)}}else{new a(d,c[0])}}return this};$.fn.iOSCheckbox=function(a){var b;if(a==null){a={}}b=$.extend({},a,{resizeHandle:false,disabledClass:"iOSCheckDisabled",containerClass:"iOSCheckContainer",labelOnClass:"iOSCheckLabelOn",labelOffClass:"iOSCheckLabelOff",handleClass:"iOSCheckHandle",handleCenterClass:"iOSCheckHandleCenter",handleRightClass:"iOSCheckHandleRight",dataName:"iOSCheckbox"});return this.iphoneStyle(b)}}).call(this);