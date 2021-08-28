if (self.CavalryLogger) { CavalryLogger.start_js(["cBi2one"]); }

__d("LiveTimer",["csx","cx","fbt","CSS","DOM","ODS","Run","ServerTime","TimeSlice","clearTimeout","gkx","killswitch","setTimeout","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f,g,h,i){var j=1e3,k=60,l=3600;a=43200;var m=86400,n=60,o=24,p=7,q=365,r=6e4,s=function(a){a.text===""&&(a.text=null);return a},t=[],u=null,v=!0,w={restart:function(a){b("ServerTime").update(a*1e3),this.updateTimeStamps()},registerLiveTimestamp:function(a){if(!b("killswitch")("GHL_LIVE_TIMER_SERVER_REGISTERED_TIMESTAMP")){t.length===0&&(w.delayUpdatingServerRegisteredLiveTimestamps(),w.cleanupServerRegisteredLiveTimestampsOnLeave());var c="";if(b("gkx")("837029")){var d=w.render(a.serverTime,a.time,a.size);c=d!=null?String(d.text):""}t.push(babelHelpers["extends"]({},a,{initialText:c}))}},delayUpdatingServerRegisteredLiveTimestamps:function(){v=!0,b("setTimeout")(function(){v=!1,w.startLoop(0)},30*j)},cleanupServerRegisteredLiveTimestampsOnLeave:function(){u!=null&&(u=b("Run").onLeave(function(){t.length=0,u=null}))},getApproximateServerTime:function(){return b("ServerTime").get()},getServerTimeOffset:function(){return-1*b("ServerTime").getSkew()},updateTimeStamps:function(){this.timestamps=b("DOM").scry(document.body,"abbr.livetimestamp"),this.startLoop(r)},addTimeStamps:function(a){if(!a)return;this.timestamps=this.timestamps||[];if(b("DOM").isNodeOfType(a,"abbr")&&b("CSS").hasClass(a,"livetimestamp"))this.timestamps.push(a);else{a=b("DOM").scry(a,"abbr.livetimestamp");for(var c=0;c<a.length;++c)this.timestamps.push(a[c])}this.startLoop(0)},removeTimestamp:function(a){if(!this.timestamps||!a)return;a=this.timestamps.indexOf(a);a>-1&&this.timestamps.splice(a,1)},startLoop:function(a){this.stop(),this.createTimeout(a)},createTimeout:function(a){var c=this;this.timeout=b("setTimeoutAcrossTransitions")(b("TimeSlice").guard(function(){c.loop()},"LiveTimer.loop",{propagationType:b("TimeSlice").PropagationType.EXECUTION}),a)},stop:function(){b("clearTimeout")(this.timeout)},loop:function(a){var c=this;a&&this.updateTimeStamps();var d=Math.floor(b("ServerTime").get()/j),e=-1;this.timestamps&&this.timestamps.forEach(function(a){var f=a.getAttribute("data-utime"),g=a.getAttribute("data-shorten"),h=a.getAttribute("data-minimize");g=c.renderRelativeTime(d,f,g,h);if(g.text){h=b("DOM").scry(a,".timestampContent")[0];h==null?b("DOM").setContent(a,b("DOM").create("span",{"class":"timestampContent"},g.text)):h.textContent!==g.text.toString()&&(h.textContent=g.text);h=c.renderRelativeTime(d,f,!1,!1,!0);h.text&&b("DOM").setAttributes(a,{"aria-label":h.text})}g.next!=-1&&(g.next<e||e==-1)&&(e=g.next)});!b("killswitch")("GHL_LIVE_TIMER_SERVER_REGISTERED_TIMESTAMP")&&!v&&t.forEach(function(a){var f=c.render(d,a.time,a.size);f.next!=-1&&(f.next<e||e==-1)&&(e=f.next);if(b("gkx")("837029")){var g=String(f.text)===a.initialText;b("ODS").bumpEntityKey(2966,"feed_ads","LiveTimer.smart_update_"+String(g));if(g)return}b("DOM").setContent(a.ref,f.text)});if(e!=-1){a=Math.max(r,e*j);this.createTimeout(a)}},renderRelativeTime:function(a,b,c,d,e){var f={text:"",next:-1};if(a-b>m&&!e)return f;e=a-b;a=Math.floor(e/k);b=Math.floor(a/n);var g=Math.floor(b/o),h=Math.floor(g/p),j=Math.floor(g/q);if(a<1){d?(f.text=i._("1 ph\u00fat"),f.next=20-e%20):c?(f.text=i._("V\u1eeba xong"),f.next=20-e%20):(f.text=i._("v\u00e0i gi\u00e2y tr\u01b0\u1edbc"),f.next=k-e%k);return f}if(b<1){d?f.text=i._({"*":"{number} ph\u00fat"},[i._param("number",a,[0])]):c&&a==1?f.text=i._("1 ph\u00fat"):c?f.text=i._({"*":"{number} ph\u00fat"},[i._param("number",a,[0])]):f.text=i._({"*":"{number} ph\u00fat tr\u01b0\u1edbc","_1":"kho\u1ea3ng m\u1ed9t ph\u00fat tr\u01b0\u1edbc"},[i._plural(a,"number")]);f.next=k-e%k;return f}b<11&&(f.next=l-e%l);if(b<24){d?f.text=i._({"*":"{number} gi\u1edd"},[i._param("number",b,[0])]):c&&b==1?f.text=i._("1 gi\u1edd"):c?f.text=i._({"*":"{number} gi\u1edd"},[i._param("number",b,[0])]):f.text=i._({"*":"{number} gi\u1edd tr\u01b0\u1edbc","_1":"kho\u1ea3ng m\u1ed9t gi\u1edd tr\u01b0\u1edbc"},[i._plural(b,"number")]);return f}if(g<7){d?f.text=i._({"*":"{number} ng\u00e0y"},[i._param("number",g,[0])]):f.text=g===1?i._("m\u1ed9t ng\u00e0y tr\u01b0\u1edbc"):i._({"*":"{number} ng\u00e0y tr\u01b0\u1edbc"},[i._param("number",g,[0])]);return f}if(g>=7&&g<365){d?f.text=i._({"*":"{number} tu\u1ea7n"},[i._param("number",h,[0])]):f.text=h===1?i._("1 tu\u1ea7n tr\u01b0\u1edbc"):i._({"*":"{number} tu\u1ea7n tr\u01b0\u1edbc"},[i._param("number",h,[0])]);return f}d?f.text=i._({"*":"{number} n\u0103m"},[i._param("number",j,[0])]):f.text=j===1?i._("1 n\u0103m tr\u01b0\u1edbc"):i._({"*":"{number} n\u0103m tr\u01b0\u1edbc"},[i._param("number",j,[0])]);return f},renderRelativeTimeToServer:function(a,c,d,e){return this.renderRelativeTime(Math.floor(b("ServerTime").get()/j),a,c,d,e)},render:function(a,b,c,d){d===void 0&&(d=!1);return s(w.renderRelativeTime(a,b,c==="short",c==="minimal",d))},renderNow:function(a,b,c){c===void 0&&(c=!1);return s(w.renderRelativeTimeToServer(a,b==="short",b==="minimal",c))},CONSTS:{MS_IN_SEC:j,SEC_IN_MIN:k,SEC_IN_HOUR:l,SEC_IN_12_HOUR:a,SEC_IN_24_HOUR:m,MIN_IN_HOUR:n,HEARTBEAT:r}};e.exports=w}),null);
__d("EmbeddedLiveVideoHeaderFooterOverlay",["cx","CSS","EventListener","throttle"],(function(a,b,c,d,e,f,g,h){var i=3e3;a=function(){function a(a,b){this.$1=b,this.$2=a,c("EventListener").listen(b,"mouseleave",this.$5.bind(this)),c("EventListener").listen(b,"mouseenter",this.$6.bind(this)),c("EventListener").listen(b,"mousemove",c("throttle")(this.$7.bind(this),200))}var b=a.prototype;b.$8=function(){d("CSS").addClass(this.$1,"_2z4")};b.$9=function(){d("CSS").removeClass(this.$1,"_2z4")};b.$5=function(){this.$3=!1,this.$8()};b.$6=function(){this.$3=!0,this.$9()};b.$7=function(){this.$3&&(this.$9(),window.clearTimeout(this.$4),this.$4=window.setTimeout(this.$8.bind(this),i))};return a}();g["default"]=a}),98);
__d("TimeSpentImmediateActiveSecondsLoggerBlue",["ImmediateActiveSecondsConfig","ScriptPath","WebImmediateActiveSecondsFalcoEvent"],(function(a,b,c,d,e,f,g){var h=0;function i(a){if(c("ImmediateActiveSecondsConfig").sampling_rate<=0)return!1;a=Math.floor(a/1e3)%c("ImmediateActiveSecondsConfig").sampling_rate;return a===c("ImmediateActiveSecondsConfig").ias_bucket}function a(a){if(a>=h&&a-h<1e3)return;i(a)&&c("WebImmediateActiveSecondsFalcoEvent").logImmediately(function(){return{activity_time_ms:a,last_activity_time_ms:h,script_path:c("ScriptPath").getTopViewEndpoint()}});h=Math.floor(a/1e3)*1e3}f.exports={maybeReportActiveSecond:a}}),34);
__d("XWebGraphQLMutationController",["XController"],(function(a,b,c,d,e,f){e.exports=b("XController").create("/webgraphql/mutation/",{query_id:{type:"FBID"},variables:{type:"String"},doc_id:{type:"FBID"}})}),null);
__d("base62",[],(function(a,b,c,d,e,f){"use strict";var g="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";function a(a){if(!a)return"0";var b="";while(a>0)b=g[a%62]+b,a=Math.floor(a/62);return b}f["default"]=a}),66);
__d("WebGraphQLMutationBase",["invariant","CurrentUser","WebGraphQLLegacyHelper","XWebGraphQLMutationController","base62"],(function(a,b,c,d,e,f,g,h){"use strict";var i=0;a=function(){function a(a){this.$1=a}var b=a.prototype;b.__getVariables=function(){return this.$1};b.__getDocID=function(){return this.constructor.__getDocID()};a.__getController=function(){return c("XWebGraphQLMutationController")};a.__getDocID=function(){h(0,1804)};a.getURI=function(a){return d("WebGraphQLLegacyHelper").getURI({controller:this.__getController(),docID:this.__getDocID(),variables:{data:babelHelpers["extends"]({client_mutation_id:c("base62")(i++),actor_id:c("CurrentUser").getID()},a)}})};return a}();g["default"]=a}),98);
__d("XEventsPermalinkController",["XController"],(function(a,b,c,d,e,f){e.exports=b("XController").create("/events/{?location_slug}/{?name_slug}/{event_id}/",{event_id:{type:"FBID",required:!0},location_slug:{type:"String"},name_slug:{type:"String"},event_time_id:{type:"FBID"},acontext:{type:"String"},active_tab:{type:"Enum",defaultValue:"about",enumType:1},end_cursor:{type:"String"},filter:{type:"String"},multi_permalinks:{type:"String"},post_id:{type:"Int"},view:{type:"Enum",enumType:1},ticket_order_id:{type:"FBID"},ref_page_id:{type:"FBID"},ti:{type:"String"},after_load_action:{type:"Enum",enumType:0},privacy_mutation_token:{type:"String"}})}),null);
__d("XPagesManagerSettingsController",["XController"],(function(a,b,c,d,e,f){e.exports=b("XController").create("/{page_token}/settings/",{page_token:{type:"String",required:!0},business_id:{type:"Int"},edited:{type:"String"},section:{type:"String"},tab:{type:"String"},change_admin_action:{type:"String"},change_admin_uid:{type:"Int"},tbid:{type:"Int"},fid:{type:"Int"},item_id:{type:"Int"},ref:{type:"String"},shimmed_in_item:{type:"Bool",defaultValue:!1},q:{type:"String"},promote_plugin_tab:{type:"Enum",enumType:1},active_section:{type:"String"},on_load_actions:{type:"StringVector"},partner_id:{type:"Int"},enable:{type:"Enum",enumType:1},creator_request_id:{type:"Int"},show_cc_dialog:{type:"Bool",defaultValue:!1},chat_plugin_step:{type:"Int",defaultValue:0},country_code:{type:"Enum",enumType:1},show_sync_dialog:{type:"Bool",defaultValue:!1},job_manager_requester_id:{type:"Int"}})}),null);