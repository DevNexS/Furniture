let octLoadMore=function(e){document.querySelectorAll("ul.pagination li").length,parseInt(document.querySelector("ul.pagination li.active span").innerHTML);let t=document.querySelector("ul.pagination li.active").nextElementSibling.outerHTML.replace(/.*href="(.*)".*/,"$1");t=t.replace(/&amp;/g,"&"),$.ajax({url:t,dataType:"html",beforeSend:function(){masked("body",!0),document.querySelector(".oct-load-more-button").classList.add("oct-animated")},complete:function(){e&&lozad(".oct-lazy").observe(),masked("body",!1),octCheckPagination(),octCheckDisplayView(),document.querySelector(".rm-category .oct-load-more-button").classList.remove("oct-animated")},success:function(e){octShowMoreContent(e),history.pushState({},"",t)}})},octCheckPagination=function(){document.querySelector("ul.pagination li.active + li")?document.querySelector(".rm-category .oct-load-more-button").classList.remove("d-none"):(document.querySelector(".rm-category .oct-load-more-button, .rm-category .oct-load-more").classList.add("d-none"),document.querySelector(".rm-category .oct-load-more").classList.remove("d-flex"))},octCheckDisplayView=function(){if(null!==document.querySelector(".rm-category-sort-limit"))if(console.log(localStorage.getItem("display")),"list"==localStorage.getItem("display")){let e=document.querySelector("#list-view");simulateClick(e)}else{let e=document.querySelector("#grid-view");simulateClick(e)}},octShowMoreContent=function(e){let t=document.createElement("div");t.innerHTML=e;let o=t.querySelectorAll("ul.pagination li");const n=Array.from(o);document.querySelector("ul.pagination").innerHTML="";let r=document.querySelector("ul.pagination");n.forEach(e=>r.insertAdjacentElement("beforeend",e));let c=t.querySelectorAll(".product-layout.rm-module-col");const l=Array.from(c);let i=document.querySelector(".rm-category-products");l.forEach(e=>i.insertAdjacentElement("beforeend",e))},simulateClick=function(e){let t=new MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});e.dispatchEvent(t)};if($("body").on("click",".product-layout.product-grid",function(e){let t=this.getAttribute("data-pid");sessionStorage.setItem("productViewed",t)}),$("body").on("click",".product-layout.rm-module-col button",function(e){let t=$(this).parent().parent().parent().parent().parent().attr("data-pid");sessionStorage.setItem("productViewed",t)}),window.performance&&window.performance.navigation.type==window.performance.navigation.TYPE_BACK_FORWARD){"scrollRestoration"in history&&(history.scrollRestoration="manual");let e=!1;$(window).on("scroll",function(){e||(e=!0,scrollTo(0,0))});let t=sessionStorage.getItem("productViewed");if(null!==t){let e=document.querySelector('[data-pid="'+t+'"]').offsetTop;window.width>992?e+=170:e+=80,$(window).on("pageshow",function(t){$("html, body").animate({scrollTop:e},"50"),sessionStorage.removeItem("productViewed")})}}else sessionStorage.removeItem("productViewed"),history.scrollRestoration="auto";
