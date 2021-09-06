module.exports=function(t){var e={};function o(n){if(e[n])return e[n].exports;var r=e[n]={i:n,l:!1,exports:{}};return t[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}return o.m=t,o.c=e,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="",o(o.s=16)}([function(t,e){t.exports=flarum.core.compat.app},function(t,e){t.exports=flarum.core.compat.extend},function(t,e){t.exports=flarum.core.compat["components/CommentPost"]},function(t,e){t.exports=flarum.core.compat["components/Link"]},function(t,e){t.exports=flarum.core.compat["helpers/username"]},function(t,e){t.exports=flarum.core.compat["models/Post"]},function(t,e){t.exports=flarum.core.compat.Model},function(t,e){t.exports=flarum.core.compat["components/NotificationGrid"]},function(t,e){t.exports=flarum.core.compat["components/Button"]},function(t,e){t.exports=flarum.core.compat["helpers/punctuateSeries"]},function(t,e){t.exports=flarum.core.compat["helpers/icon"]},function(t,e){t.exports=flarum.core.compat["components/Modal"]},function(t,e){t.exports=flarum.core.compat["helpers/avatar"]},function(t,e){t.exports=flarum.core.compat["components/Notification"]},function(t,e){t.exports=flarum.core.compat["utils/string"]},,function(t,e,o){"use strict";o.r(e);var n=o(1),r=o(0),a=o.n(r),s=o(5),i=o.n(s),u=o(6),c=o.n(u),l=o(7),f=o.n(l),p=o(8),d=o.n(p),k=o(2),h=o.n(k),y=o(3),x=o.n(y),b=o(9),v=o.n(b),_=o(4),g=o.n(_),j=o(10),O=o.n(j);function M(t,e){t.prototype=Object.create(e.prototype),t.prototype.constructor=t,t.__proto__=e}var P=o(11),L=o.n(P),N=o(12),S=o.n(N),C=function(t){function e(){return t.apply(this,arguments)||this}M(e,t);var o=e.prototype;return o.className=function(){return"PostLikesModal Modal--small"},o.title=function(){return app.translator.trans("flarum-likes.forum.post_likes.title")},o.content=function(){return m("div",{className:"Modal-body"},m("ul",{className:"PostLikesModal-list"},this.attrs.post.likes().map((function(t){return m("li",null,m(x.a,{href:app.route.user(t)},S()(t)," "," ",g()(t)))}))))},e}(L.a),B=o(13),T=o.n(B),w=o(14),I=function(t){function e(){return t.apply(this,arguments)||this}M(e,t);var o=e.prototype;return o.icon=function(){return"far fa-thumbs-up"},o.href=function(){return app.route.post(this.attrs.notification.subject())},o.content=function(){var t=this.attrs.notification.fromUser();return app.translator.transChoice("flarum-likes.forum.notifications.post_liked_text",1,{user:t})},o.excerpt=function(){return Object(w.truncate)(this.attrs.notification.subject().contentPlain(),200)},e}(T.a);a.a.initializers.add("flarum-likes",(function(){a.a.notificationComponents.postLiked=I,i.a.prototype.canLike=c.a.attribute("canLike"),i.a.prototype.likes=c.a.hasMany("likes"),Object(n.extend)(h.a.prototype,"actionItems",(function(t){var e=this.attrs.post;if(!e.isHidden()&&e.canLike()){var o=e.likes(),n=a.a.session.user&&o&&o.some((function(t){return t===a.a.session.user}));t.add("like",d.a.component({className:"Button Button--link",onclick:function(){n=!n,e.save({isLiked:n});var t=e.data.relationships.likes.data;t.some((function(e,o){if(e.id===a.a.session.user.id())return t.splice(o,1),!0})),n&&t.unshift({type:"users",id:a.a.session.user.id()})}},a.a.translator.trans(n?"flarum-likes.forum.post.unlike_link":"flarum-likes.forum.post.like_link")))}})),Object(n.extend)(h.a.prototype,"footerItems",(function(t){var e=this.attrs.post,o=e.likes();if(o&&o.length){var n=o.length>4,r=o.sort((function(t){return t===a.a.session.user?-1:1})).slice(0,n?3:4).map((function(t){return m(x.a,{href:a.a.route.user(t)},t===a.a.session.user?a.a.translator.trans("flarum-likes.forum.post.you_text"):g()(t))}));if(n){var s=o.length-r.length;r.push(m("a",{href:"#",onclick:function(t){t.preventDefault(),a.a.modal.show(C,{post:e})}},a.a.translator.transChoice("flarum-likes.forum.post.others_link",s,{count:s})))}t.add("liked",m("div",{className:"Post-likedBy"},O()("far fa-thumbs-up"),a.a.translator.transChoice("flarum-likes.forum.post.liked_by"+(o[0]===a.a.session.user?"_self":"")+"_text",r.length,{count:r.length,users:v()(r)})))}})),Object(n.extend)(f.a.prototype,"notificationTypes",(function(t){t.add("postLiked",{name:"postLiked",icon:"far fa-thumbs-up",label:a.a.translator.trans("flarum-likes.forum.settings.notify_post_liked_label")})}))}))}]);
//# sourceMappingURL=forum.js.map