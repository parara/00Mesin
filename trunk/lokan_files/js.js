function Get_Cookie(n){var i=document.cookie.indexOf(n+"="),r=i+n.length+1,t;return!i&&n!=document.cookie.substring(0,n.length)?null:i==-1?null:(t=document.cookie.indexOf(";",r),t==-1&&(t=document.cookie.length),unescape(document.cookie.substring(r,t)))}function Set_Cookie(n,t,i,r,u,f){var e=n+"="+escape(t)+(i?";expires="+i.toUTCString():";expires="+setExpiration(3e3))+(r?";path="+r:";path=/")+(u?";domain="+u:"")+(f?";secure":"");document.cookie=e}function Delete_Cookie(n,t,i){Get_Cookie(n)&&(document.cookie=n+"="+(t?";path="+t:"")+(i?";domain="+i:"")+";expires=Thu, 01-Jan-1970 00:00:01 GMT")}function setExpiration(n){var t=new Date,i=new Date(t.getTime()+n*864e5);return i.toGMTString()}function Embed(n,t){var r=document.getElementById(n),i=document.getElementById(n+"_Loading");i&&(i.style.display="block");r.src="http://"+t+"?random=3u7894"}