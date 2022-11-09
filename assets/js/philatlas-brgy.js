!function(){var e,t;e=this,t=function(e){e.TileLayer.Fallback=e.TileLayer.extend({options:{minNativeZoom:0},initialize:function(t,a){e.TileLayer.prototype.initialize.call(this,t,a)},createTile:function(t,a){var n=e.TileLayer.prototype.createTile.call(this,t,a);return n._originalCoords=t,n._originalSrc=n.src,n},_createCurrentCoords:function(e){var t=this._wrapCoords(e);return t.fallback=!0,t},_originalTileOnError:e.TileLayer.prototype._tileOnError,_tileOnError:function(e,t,a){var n,o,r,l=this,i=t._originalCoords,s=t._currentCoords=t._currentCoords||l._createCurrentCoords(i),c=t._fallbackZoom=void 0===t._fallbackZoom?i.z-1:t._fallbackZoom-1,d=t._fallbackScale=2*(t._fallbackScale||1),p=l.getTileSize(),h=t.style;if(c<l.options.minNativeZoom)return this._originalTileOnError(e,t,a);s.z=c,s.x=Math.floor(s.x/2),s.y=Math.floor(s.y/2),n=l.getTileUrl(s),h.width=p.x*d+"px",h.height=p.y*d+"px",o=(i.y-s.y*d)*p.y,h.marginTop=-o+"px",r=(i.x-s.x*d)*p.x,h.marginLeft=-r+"px",h.clip="rect("+o+"px "+(r+p.x)+"px "+(o+p.y)+"px "+r+"px)",l.fire("tilefallback",{tile:t,url:t._originalSrc,urlMissing:t.src,urlFallback:n}),t.src=n},getTileUrl:function(t){var a=t.z=t.fallback?t.z:this._getZoomForUrl(),n={r:e.Browser.retina?"@2x":"",s:this._getSubdomain(t),x:t.x,y:t.y,z:a};if(this._map&&!this._map.options.crs.infinite){var o=this._globalTileRange.max.y-t.y;this.options.tms&&(n.y=o),n["-y"]=o}return e.Util.template(this._url,e.extend(n,this.options))}}),e.tileLayer.fallback=function(t,a){return new e.TileLayer.Fallback(t,a)}},"function"==typeof define&&define.amd?define(["leaflet"],t):t("object"==typeof module&&module.exports?require("leaflet"):e.L),function(){"use strict";var e,t;top!=self&&(top.location.replace(location),location.replace("about:blank")),e=document.getElementById("mainNavToggle"),t=document.getElementById("mainMenu"),e&&t&&(e.addEventListener("click",function(){"block"===t.style.display||""===t.style.display?t.style.display="none":t.style.display="block"}),window.onresize=function(){window.innerWidth>768?t.style.display="block":t.style.display="none"});var a=document.getElementById("placeName");if(a)var n=a.textContent;var o,r,l,i,s="#5da4da",c="#e05c5d",d="#60b760";function p(e,t){return e+t}function h(e){return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}function u(e){e.getDatasetMeta(0).data.forEach(function(e){return e.hidden=!1})}function m(e){return e=e.toLowerCase().replace(" ","-").replace(/[,'\*&]/gi,"")}function g(e){if(e=e.querySelectorAll("BUTTON"))for(var t=e.length,a=function(){for(var a=0;a<t;a++)e[a].style.fontWeight="normal";this.style.fontWeight="bold"},n=0;n<t;n++)e[n].addEventListener("click",a,!1)}function b(e){e.addEventListener("contextmenu",function(e){e.preventDefault()})}function y(e,t,a){return e>=1e6?e/1e6+"M":e>=1e3?e/1e3+"K":e}!function(e){if(e=document.getElementById("topBtnWrap")){var t=document.createElement("BUTTON");t.id="topButton",t.title="Go to top",t.textContent="Top",e.appendChild(t),window.onscroll=function(){document.body.scrollTop>500||document.documentElement.scrollTop>500?t.style.display="block":t.style.display="none"},t.onclick=function(){document.body.scrollTop=0,document.documentElement.scrollTop=0}}}(),function(){var e=document.getElementsByTagName("img");if(e)for(var t=0,a=e.length;t<a;t++)b(e[t])}(),function(e){if(e=document.getElementById("copyright")){var t=(new Date).getFullYear()+"&#160;PhilAtlas";e.innerHTML="Copyright&#160;&#169;&#160;"+t}}(),function(e){if(document.getElementById("mapWrapBrgy")){document.getElementById("map").setAttribute("style","max-width:400px;height:300px;border:1px solid #777");var t=document.getElementById("latitude").textContent,a=document.getElementById("longitude").textContent,n=parseFloat(t).toFixed(4),o=parseFloat(a).toFixed(4),r=L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy;&#160;'}),l=L.tileLayer.fallback("",{attribution:'Map tiles by, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; OpenStreetMap</a> contributors',subdomains:"abcd",maxZoom:14,ext:"png"}),i=L.tileLayer.fallback("https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png",{maxZoom:14,attribution:'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'}),s=L.icon({iconUrl:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAApCAMAAAD3TXL8AAABfVBMVEUAAAAya6EtcqQyaZYwc6M2frQ3grYzd6owdKEwcZ4vbpowcqAua5czd6UtbJc0eKcubJg3gbYubpo4grgua5c0easyd6cubZs4gbQ4gbUtbJktbJk5g7czdqc5g7gtbZktbZkxdKU0d6c3f7A9hrgwcqE1eqw4fa0ubZkvbp5EjL42gLI4g7ZHkMM8grUwb5wwebYyh8w2iM5JltFVn9Qxg81Dk9FKmtE5jc44d6RbpNX///8/ks8lfsocd8kgeskogMo/j9BEjMA9kc42i81HmNFYodU0is1Bhro7i89Lk8lHldJKl9JQmcxOm9Mwb5xFi7xNlstSntNVntA5fa08gLA/icREjcQifMkxe7lBlM9QndNfptcuhcs8kM4rgssrgMxFl9AZdMg1gL04grY3gb86hcJChbM8h8RMhq9HkctFlNFek7iDrcqPtc6gwNa2zt7e6fH6/P39/v4shMsfecgpgcpElc8whsxAisdunb2XudGrxdfB1eLR3+rxbjYGAAAAMXRSTlMAAQgNFR4rPEJJUFNbYWpxd32DjIyxwMzM0tbh5Ofo6e/09fX29vb29/f4+Pn6+v3+EuFBQQAAAhhJREFUeNp1zwOD5DAYgOFvbY9t27ZtaW3prN9+STvGU75lAiOr65vrqzBj/YRzJZFIrngn6zBu6Uijzbo6nY4rq9UcLcHQGkNSdlna9qi9bXGVJczha1tqrasUHSi5tOqd/p/F2Zj9fMQey4rXAKOqYt9J0f4xpqIBsie2RFuI3RJDix2fmi3iPYBlWTGHK1cuVCvVQrlNRFG2DBtyiwfJZCvP7x/vL5WiHadFvgEHklw4HG6Vbl/d2Fu11EKdkxwANRTt9XrnqftPN+GJaHOICtyUzeFwmAvPbtLvRAa1LcUFYcqD7yRe3KTXW3zHkxICLWSLRCK20JOb9CvxSDQNjnVpdOYwO/+6sX/OYhh1WncM26JMHLGFnH8+3J9vzsIjzoxoC1b15ojRaIyn6878fd5ZN8dRRcz6VQB6ImjEguaH+oO5f56gA8CONG38QTAlTeSZMS3dBoBlQc3RneSo8ZcAOZbZvkzo2kSHgK0qfppOx5lqilUgUETBb2NOg6JjwPBLd6bASPxOsQJ9x8JgwBvwkmsgKD2EgRXFjdE7YLoR4Ff6DqVJb4PkTY69gud0bW2QrNeCZRizL002/FgjKd2Hccv8S+tXzHrJX4YJ+0qT3+fz+U3KPZi0xG6eoTtnTfYSTNlVmnwXPpNyF8fMSxezr2A7SqvfqtiGWUusptXAgnm2FFbFFsxFz9Nhvs38JixwOB7/ASR4rxkzOl8RAAAAAElFTkSuQmCC",iconSize:[],iconAnchor:[10,35],popupAnchor:[0,-28]}),c=document.getElementById("placeName").textContent,d="<strong>"+c+"</strong><br />is located at approximately<br /><strong>"+n+", "+o+"</strong>",p=L.marker([n,o],{icon:s,riseOnHover:!0,alt:c+" location marker",title:c}).bindPopup(d),h=L.layerGroup([p]),u=L.map("map",{center:[n,o],zoom:13,layers:[r,h],maxZoom:14,minZoom:11,zoomDelta:1,keyboard:!1,dragging:!1,boxZoom:!1,doubleClickZoom:!1,scrollWheelZoom:!1,tap:!1,touchZoom:!1}),m={"<span style='font-weight:700'>OSM&#160;Mapnik</span>":r,OpenTopoMap:i,"Stamen Terrain":l},g={Marker:h};L.control.layers(m,g).addTo(u),L.control.scale({position:"bottomright"}).addTo(u);var b=document.getElementById("mapLinks");b.textContent="View location at: ";var y=document.createDocumentFragment(),f=document.createElement("A");f.className="leaflet-map-external-links",f.target="_blank";var C=f.cloneNode(!0),v=f.cloneNode(!0),x=f.cloneNode(!0),w=f.cloneNode(!0);f.id="mapLinkOsm",C.id="mapLinkStamenTerr",v.id="mapLinkOpenTopoMap",x.id="mapLinkBing",w.id="mapLinkGoogle",f.href="https://www.openstreetmap.org/#map=15/"+n+"/"+o,C.href="http://maps.stamen.com/terrain/#13/"+n+"/"+o,v.href="https://opentopomap.org/#map=15/"+n+"/"+o,x.href="https://www.bing.com/maps?cp="+n+"~"+o+"&style=a&lvl=15",w.href="https://www.google.com/maps/@"+n+","+o+",2886m/data=!3m1!1e3",f.textContent="OpenStreetMap",C.textContent="Stamen Terrain",v.textContent="OpenTopoMap",x.textContent="Bing Aerial",w.textContent="Google Maps",f.title="View the location at OpenStreetMap (opens in new tab)",C.title="View the location at Stamen Terrain (opens in new tab)",v.title="View the location at OpenTopoMap (opens in new tab)",x.title="View the location at Bing Aerial imagery (opens in new tab)",w.title="View the location at Google Maps (opens in new tab)",y.appendChild(f),y.appendChild(C),y.appendChild(v),y.appendChild(x),y.appendChild(w),b.appendChild(y)}}(),o=document.getElementById("households-details"),r=document.getElementById("households-chart-container"),l=document.getElementById("households-table"),i=document.getElementById("households-canvas-wrap"),o&&r&&l&&i&&function(){for(var e=[],t=[],a=[],n=[],o=1,p=l.rows.length;o<p;o++){e.push(l.rows[o].cells[0].textContent.replace(/\s.*/g,""));var h=l.rows[o].cells[1].innerHTML.replace(/,/g,"").replace("&#8211;","");h=parseInt(h)||h,t.push(h);var u=l.rows[o].cells[2].innerHTML.replace(/,/g,"").replace("&#8211;","");u=parseInt(u)||u,a.push(u);var f=l.rows[o].cells[3].innerHTML.replace(/,/g,"").replace("&#8211;","");f=parseFloat(f)||f,n.push(f)}var C="Household population",v="Number of households",x="Average household size",w=" ("+e[0]+"-"+e[e.length-1]+")",k=document.createElement("CANVAS");k.width=350,k.height=350,k.className="chart-canvas",k.id="households-chart",k.setAttribute("role","img"),k.setAttribute("aria-label","Chart illustrating the households of this local government unit (LGU)"),i.appendChild(k),b(k);var L=function(e,t){return t.datasets[e.datasetIndex].data[e.index].toString().replace("&#8211;","").replace(/\B(?=(\d{3})+(?!\d))/g,",")},A=function(e,t){var a=t.datasets[e.datasetIndex].data[e.index].toString().replace("&#8211;",""),n=parseInt(a);return isNaN(n)&&(a=null),a};!function(){var o=k.getContext("2d"),l=o.createLinearGradient(0,0,0,k.height);l.addColorStop(0,"rgba(67, 138, 242, 0.365625)"),l.addColorStop(1,"rgba(255,255,255, 0)");var p={labels:e,datasets:[{data:t,label:C+w,backgroundColor:l,borderColor:s,borderWidth:2,maxBarThickness:45}]},h={responsive:!1,animation:{duration:750},hover:{animationDuration:0,mode:"nearest",intersect:!0},elements:{line:{tension:0}},title:{display:!1,text:C+w},tooltips:{mode:"index",intersect:!1,callbacks:{label:function(e,t){return e.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}},displayColors:!1},scales:{xAxes:[{display:!0,scaleLabel:{display:!0,labelString:"Censual Year"},ticks:{autoSkip:!1,maxRotation:52.5,minRotation:52.5}}],yAxes:[{display:!0,scaleLabel:{display:!0,labelString:C},ticks:{callback:y}}]},legend:{labels:{boxWidth:0,fontStyle:"bold"}}};Chart.defaults.global.defaultFontColor="#26282d";var u=new Chart(o,{type:"line",data:p,options:h});function b(e){var t=e.data.datasets[0],a=e.data.datasets[0].label;function n(){return t.data.map(function(e){return e<0?c:d})}"line"==e.config.type?a==C+w||a==v+w?(t.backgroundColor=l,t.borderColor=s,t.pointBorderColor=s,t.pointBackgroundColor="transparent",t.fill=!0):a==x+w&&(t.borderColor="grey",t.pointBorderColor=n(),t.pointBackgroundColor=n(),t.fill=!1):"bar"==e.config.type&&(a==C+w||a==v+w?(t.backgroundColor=s,t.borderColor=s):a==x+w&&(t.borderColor=n(),t.backgroundColor=n()),e.options.scales.yAxes[0].ticks.beginAtZero="true")}var f=document.createDocumentFragment(),E=document.createElement("BUTTON");E.className="chart-toggle-button";var B=E.cloneNode(!0);B.textContent=v;var T=E.cloneNode(!0);T.textContent=x,E.textContent=C,E.style.fontWeight="bold";var N=document.createElement("INPUT");N.setAttribute("type","radio"),N.className="households-chart-choices";var S=N.cloneNode(!0);N.name="households-chart-choices",N.id="households-chart-choice-line",N.value="Line",N.checked=!0,S.name="households-chart-choices",S.id="households-chart-choice-bar",S.value="Bar";var I=document.createElement("LABEL");I.className="households-chart-choice-label";var M=I.cloneNode(!0);I.htmlFor="households-chart-choice-line",I.textContent="Line",M.htmlFor="households-chart-choice-bar",M.textContent="Bar",M.appendChild(S),I.appendChild(N);var F=document.createElement("DIV");F.className="chart-buttons-wrap",f.appendChild(E),f.appendChild(B),f.appendChild(T),F.appendChild(f);var P=document.createElement("DIV");P.className="chart-radio-buttons-wrap",f.appendChild(I),f.appendChild(M);var z,U=u.boxes[0].chart.scales["y-axis-0"].ticks[u.boxes[0].chart.scales["y-axis-0"].ticks.length-1],H=document.createElement("INPUT");if(0===U)z=!1;else{z=!0,(H=document.createElement("INPUT")).type="checkbox",H.name="start-at-zero-hsholds",H.value=!1,H.id="start-at-zero-hsholds-checkbox",H.style.marginLeft=".75rem";var O=document.createElement("LABEL");O.htmlFor="start-at-zero-hsholds-checkbox",O.title="Set chart y-axis to begin at zero",O.textContent="Zero baseline",O.style.marginLeft=".25rem",f.appendChild(H),f.appendChild(O)}P.appendChild(f);var Z=document.createElement("DIV");function R(){var e=this.value;if(e){var t=u.options.scales.yAxes[0].scaleLabel.labelString;u.destroy(),b(u=new Chart(o,{type:m(e),data:p,options:h})),h.scales.yAxes[0].scaleLabel.labelString=t,1==z&&("line"==u.config.type?H.disabled=!1:H.disabled=!0,H.checked?h.scales.yAxes[0].ticks.beginAtZero=!0:h.scales.yAxes[0].ticks.beginAtZero=!1),u.update()}}Z.className="chart-buttons-and-radio-buttons-wrap",f.appendChild(F),f.appendChild(P),Z.appendChild(f),f.appendChild(i),f.appendChild(Z),r.appendChild(f),E.addEventListener("click",function(){u.data.datasets[0].data=t,u.data.datasets[0].label=C+w,u.options.scales.yAxes[0].ticks.callback=y,u.options.scales.yAxes[0].scaleLabel.labelString=C,u.options.tooltips.callbacks.label=L,b(u),u.update()}),B.addEventListener("click",function(){u.data.datasets[0].data=a,u.data.datasets[0].label=v+w,u.options.scales.yAxes[0].ticks.callback=y,u.options.scales.yAxes[0].scaleLabel.labelString=v,u.options.tooltips.callbacks.label=L,b(u),u.update()}),T.addEventListener("click",function(){u.data.datasets[0].data=n,u.data.datasets[0].label=x+w,u.options.scales.yAxes[0].scaleLabel.labelString=x,u.options.tooltips.callbacks.label=A,b(u),u.update()}),1==z&&"line"==u.config.type&&H.addEventListener("change",function(e){e.currentTarget.checked?u.options.scales.yAxes[0].ticks.beginAtZero=!0:u.options.scales.yAxes[0].ticks.beginAtZero=!1,u.update()}),[].forEach.call(document.querySelectorAll('INPUT[class="households-chart-choices"]'),function(e){e.addEventListener("change",R,!1)}),g(F)}()}();var f,C,v,x,w,k,A,E,B=document.getElementById("age-grp-table-wrap"),T=document.getElementById("popByAgeGrpTable"),N=document.getElementById("age-grp-canvas-wrap");if(B&&T){var S=document.getElementById("age-grp-chart-container"),I=document.getElementById("medium-rect-ad-wrap"),M=document.createDocumentFragment(),F=document.createElement("P");F.className="chart-help-text",F.textContent="Click on or hover over the bars to see the population of each age group.",M.appendChild(F),function(){var e=document.getElementById("ageGrpTotalPop").innerHTML;e="NULL"==e?"":"–"==e?"0":parseInt(e.replace(/,/g,""));for(var t=T.getElementsByTagName("TR"),a=[],o=[],r=[],l=1,i=t.length;l<i;l++){var s=T.rows[l].cells[1];T.rows[l].rowIndex<19&&(T.rows[l].rowIndex>14?r.push(parseInt(s.innerHTML.replace(/,/g,""))):T.rows[l].rowIndex<5?a.push(parseInt(s.innerHTML.replace(/,/g,""))):o.push(parseInt(s.innerHTML.replace(/,/g,""))))}var c,d=a.reduce(p),m=o.reduce(p),f=r.reduce(p);if(e>=20){for(var C,v,x=[],w=[],k=1,L=t.length;k<L-1;k++)v=T.rows[k].cells[0].innerHTML,C="NULL"==(C=T.rows[k].cells[1].innerHTML)?0:"–"==C?0:parseInt(C.replace(/,/g,"")),x.push(C),w.push(v);c=parseFloat(document.getElementById("median-age").innerHTML)}if(e>=20){var A=document.getElementById("popByAgeGrpDet");if(A){var E=document.createDocumentFragment(),F=(d/e*100).toFixed(2)+"% ("+h(d)+")",P=(m/e*100).toFixed(2)+"% ("+h(m)+")",z=(f/e*100).toFixed(2)+"% ("+h(f)+")",U=document.createElement("P");U.className="articleContent",U.innerHTML="Combining age groups together, those aged <em>14 and below</em>, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of "+F+". Those aged <em>15 up to 64</em>, roughly, the economically active population and actual or potential members of the work force, constitute a total of "+P+". Finally, old dependent population consisting of the senior citizens, those aged <em>65 and over</em>, total "+z+" in all.",E.appendChild(U);var H=document.createElement("DIV");H.className="right-floating-ad-wrap",H.id="mid-ad-320x100-wrap";var O=document.createElement("INS");O.className="adsbygoogle",O.id="mid-ad-320x100",O.style.display="inline-block",O.style.width="320px",O.style.height="100px",O.setAttribute("data-ad-client","ca-pub-2185754216036353"),O.setAttribute("data-ad-slot","4651817497");var Z=document.createElement("SCRIPT");Z.textContent="(adsbygoogle = window.adsbygoogle || []).push({});",H.appendChild(O),H.appendChild(Z),E.appendChild(H);var R,D,G,V,q,_,j=Math.round(parseFloat(document.getElementById("youth-dependency-ratio").innerHTML)),J=Math.round(parseFloat(document.getElementById("old-age-dependency-ratio").innerHTML)),W=Math.round(parseFloat(document.getElementById("total-dependency-ratio").innerHTML));1==j?(R="is ",V="dependent"):(R="are ",V="dependents"),1==J?(D="is ",q="citizen"):(D="are ",q="citizens"),1==W?(G="is ",_=" dependent"):(G="are ",_=" dependents");var Y,Q=document.createElement("P");if(Q.className="articleContent",Q.innerHTML="The computed <a href='https://www.philatlas.com/glossary.html#term-age-dep-ratio'>Age Dependency Ratios</a> mean that among the population of "+n+", there "+R+j+" youth "+V+" to every 100 of the working age population; there "+D+J+" aged/senior "+q+" to every 100 of the working population; and overall, there "+G+W+_+" (young and old-age) to every 100 of the working population.",E.appendChild(Q),n){var K=Math.round(parseFloat(c));(Y=document.createElement("P")).className="articleContent",Y.innerHTML="The <a href='https://www.philatlas.com/glossary.html#term-median-age'>median age</a> of "+K+" indicates that half of the entire population of "+n+" are aged less than "+K+" and the other half are over the age of "+K+".",E.appendChild(Y),A.insertBefore(E,B)}}}S&&function(){var e=document.createElement("CANVAS");e.width=350,e.height=437.5,e.className="chart-canvas",e.id="age-groups-chart",e.setAttribute("role","img"),e.setAttribute("aria-label","Pie chart illustrating the population share of each age group to the total population"),N.appendChild(e);var t=document.getElementById("popByAgeGrpDet");t&&M.appendChild(N);var a=[],n=[],o=T.rows.length-2;0==d&&(d="–"),0==m&&(m="–"),0==f&&(f="–");for(var r=[d,m,f],l=["14 and under","15 to 64","65 and over"],i=1;i<o;i++)a.push(T.rows[i].cells[0].textContent),n.push(T.rows[i].cells[1].innerHTML.replace(/,/g,"").replace("&#8211;",""));var s,c=e.getContext("2d"),p=["#5da4da","#5da4da","#5da4da","#5da4da","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#dfcf40","#f15955","#f15955","#f15955","#f15955"],h=["#5da4da","#dfcf40","#f15955"],C=new Chart(c,{type:"horizontalBar",data:{labels:a,datasets:[{data:n,backgroundColor:p,label:"Population by age group (2015)",maxBarThickness:45}]},options:{responsive:!1,animation:{duration:750},hover:{animationDuration:0},scales:{xAxes:[{ticks:{callback:y}}]},legend:{labels:{fontStyle:"bold",usePointStyle:!0,boxWidth:0},display:!0,position:"top"},tooltips:{callbacks:{label:function(e,t){var a=document.getElementById("ageGrpTotalPop");if(a){var n=t.datasets[e.datasetIndex].data,o=t.labels[e.index],r=n[e.index],l=(r/(a=a.innerHTML.replace(/,/g,"").replace("NULL",""))*100).toFixed(2);return o+": "+r.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")+" ("+l+"%)"}}}}}});t&&function(){var e=document.createElement("BUTTON");e.className="chart-toggle-button",e.textContent="Individual age groups";var t=e.cloneNode(!1);t.textContent="Aggregate age groups";var o=document.createElement("DIV");o.className="chart-buttons-wrap",o.appendChild(e),o.appendChild(t),M.appendChild(o),S.insertBefore(M,I),e.addEventListener("click",function(){C.data.datasets[0].data=n,C.data.datasets[0].label="Population by age group",C.data.datasets[0].backgroundColor=p,C.data.labels=a,C.options.title.text="Population by age group (2015)",u(C),C.update()}),t.addEventListener("click",function(){C.data.datasets[0].data=r,C.data.datasets[0].label="Population by age group (aggregate)",C.data.datasets[0].backgroundColor=h,C.data.labels=l,u(C),C.update()}),e.style.fontWeight="bold",g(o)}(),T&&T.className.match(/\bsortable\b/)&&(s=T.querySelector("thead>tr"))&&(s.title="Click to sort",s.style.cursor="pointer"),b(e)}()}()}f=document.getElementById("sectionHistPop"),C=document.getElementById("histpop-chart-container"),v=document.getElementById("histPop"),x=document.getElementById("histpop-canvas-wrap"),w=document.getElementById("histpop-ad-wrap"),f&&C&&v&&x&&w&&function(){for(var e=[],t=[],a=[],n=1,o=v.rows.length;n<o;n++)e.push(v.rows[n].cells[0].textContent.replace(/\s.*/g,"")),t.push(v.rows[n].cells[1].innerHTML.replace(/,/g,"").replace("&#8211;","")),a.push(v.rows[n].cells[2].innerHTML.replace(/%/g,"").replace("&#8211;",""));var r=" ("+e[0]+"-"+e[e.length-1]+")",l=document.createElement("CANVAS");l.width=350,l.height=350,l.className="chart-canvas",l.id="historical-population-chart",l.setAttribute("role","img"),l.setAttribute("aria-label","Chart illustrating the historical population of this local government unit (LGU)"),x.appendChild(l),b(l);var i=function(e,t){return t.datasets[e.datasetIndex].data[e.index].toString().replace("&#8211;","").replace(/\B(?=(\d{3})+(?!\d))/g,",")},p=function(e,t){var a=t.datasets[e.datasetIndex].data[e.index].toString().replace("&#8211;",""),n=parseInt(a);return isNaN(n)?a=null:a+="%",a};!function(){var n=l.getContext("2d"),o=n.createLinearGradient(0,0,0,l.height);o.addColorStop(0,"rgba(67, 138, 242, 0.365625)"),o.addColorStop(1,"rgba(255,255,255, 0)");var h,u={labels:e,datasets:[{data:t,label:"Population"+r,backgroundColor:o,borderColor:s,borderWidth:2}]},b={responsive:(h=e,window.innerWidth<=400&&h.length<=10),animation:{duration:750},hover:{animationDuration:0,mode:"nearest",intersect:!0},elements:{line:{tension:0}},title:{display:!1,text:"Population growth"+r},tooltips:{mode:"index",intersect:!1,callbacks:{label:function(e,t){return e.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}},displayColors:!1},scales:{xAxes:[{display:!0,scaleLabel:{display:!0,labelString:"Censual Year"}}],yAxes:[{display:!0,scaleLabel:{display:!0,labelString:"Population"},ticks:{callback:y}}]},legend:{labels:{boxWidth:0,fontStyle:"bold"}}};Chart.defaults.global.defaultFontColor="#26282d";var f=new Chart(n,{type:"line",data:u,options:b});function v(e){var t=e.data.datasets[0],a=e.data.datasets[0].label;function n(){return t.data.map(function(e){return e<0?c:d})}"line"==e.config.type?a=="Population"+r?(t.backgroundColor=o,t.borderColor=s,t.pointBorderColor=s,t.pointBackgroundColor="transparent",t.fill=!0):a=="Growth Rate"+r&&(t.borderColor="grey",t.pointBorderColor=n(),t.pointBackgroundColor=n(),t.fill=!1):"bar"==e.config.type&&(a=="Population"+r?(t.backgroundColor=s,t.borderColor=s):a=="Growth Rate"+r&&(t.borderColor=n(),t.backgroundColor=n()),e.options.scales.yAxes[0].ticks.beginAtZero="true")}var x=document.createDocumentFragment(),k=document.createElement("BUTTON");k.className="chart-toggle-button";var L=k.cloneNode(!0);k.textContent="Population",k.style.fontWeight="bold",L.textContent="Growth Rate";var A=document.createElement("INPUT");A.setAttribute("type","radio"),A.className="hist-pop-chart-choices";var E=A.cloneNode(!0);A.name="hist-pop-chart-choices",A.id="hist-pop-chart-choice-line",A.value="Line",A.checked=!0,E.name="hist-pop-chart-choices",E.id="hist-pop-chart-choice-bar",E.value="Bar";var B=document.createElement("LABEL");B.className="hist-pop-chart-choice-label";var T=B.cloneNode(!0);B.htmlFor="hist-pop-chart-choice-line",B.textContent="Line",T.htmlFor="hist-pop-chart-choice-bar",T.textContent="Bar",T.appendChild(E),B.appendChild(A);var N=document.createElement("DIV");N.className="chart-buttons-wrap",x.appendChild(k),x.appendChild(L),N.appendChild(x);var S,I,M=document.createElement("DIV");if(M.className="chart-radio-buttons-wrap",x.appendChild(B),x.appendChild(T),0===f.boxes[0].chart.scales["y-axis-0"].ticks[f.boxes[0].chart.scales["y-axis-0"].ticks.length-1])S=!1;else{S=!0,(I=document.createElement("INPUT")).type="checkbox",I.name="start-at-zero-hpop",I.value=!1,I.id="start-at-zero-hpop-checkbox",I.style.marginLeft=".75rem";var F=document.createElement("LABEL");F.htmlFor="start-at-zero-hpop-checkbox",F.title="Set chart y-axis to begin at zero",F.textContent="Zero baseline",F.style.marginLeft=".25rem",x.appendChild(I),x.appendChild(F)}function P(){"line"==f.config.type&&f.data.datasets[0].label=="Population"+r?I.disabled=!1:I.disabled=!0}M.appendChild(x);var z=document.createElement("DIV");function U(){var e=this.value;if(e){var t=f.options.scales.yAxes[0].scaleLabel.labelString;f.destroy(),v(f=new Chart(n,{type:m(e),data:u,options:b})),f.options.scales.yAxes[0].scaleLabel.labelString=t,1==S&&(P(),I.checked?b.scales.yAxes[0].ticks.beginAtZero=!0:b.scales.yAxes[0].ticks.beginAtZero=!1),f.update()}}z.className="chart-buttons-and-radio-buttons-wrap",x.appendChild(N),x.appendChild(M),z.appendChild(x),C.insertBefore(z,w),k.addEventListener("click",function(){f.data.datasets[0].data=t,f.data.datasets[0].label="Population"+r,f.options.scales.yAxes[0].ticks.callback=y,f.options.scales.yAxes[0].scaleLabel.labelString="Population",f.options.tooltips.callbacks.label=i,v(f),1==S&&P(),f.update()}),L.addEventListener("click",function(){f.data.datasets[0].data=a,f.data.datasets[0].label="Growth Rate"+r,f.options.scales.yAxes[0].scaleLabel.labelString="Growth Rate (in %)",f.options.tooltips.callbacks.label=p,v(f),1==S&&(I.disabled=!0),f.update()}),1==S&&"line"==f.config.type&&f.data.datasets[0].label=="Population"+r&&I.addEventListener("change",function(e){e.currentTarget.checked?f.options.scales.yAxes[0].ticks.beginAtZero=!0:f.options.scales.yAxes[0].ticks.beginAtZero=!1,f.update()}),[].forEach.call(document.querySelectorAll('INPUT[class="hist-pop-chart-choices"]'),function(e){e.addEventListener("change",U,!1)}),g(N)}()}(),function(e){if(!document.getElementsByClassName("no-share")[0]){var t=encodeURIComponent("https://www.philatlas.com"+window.location.pathname),a=document.createElement("DIV");a.id="shareBtnWrap";var n=document.createDocumentFragment(),o=document.createElement("UL");o.id="share-button-list";var r=document.createElement("LI");r.className="share-button";var l=document.createElement("A");l.href="https://www.facebook.com/sharer/sharer.php?u="+t,l.textContent="Share on Facebook",l.title="Share this page on Facebook",l.id="shareBtnFacebook",l.className="share-button-link",l.target="_blank",r.appendChild(l),n.appendChild(r);var i=encodeURIComponent(document.getElementsByTagName("title")[0].textContent);if(i){var s=document.createElement("LI");s.className="share-button";var c=document.createElement("A");c.href="https://twitter.com/intent/tweet?url="+t+"&text="+i,c.textContent="Share on Twitter",c.title="Share this page on Twitter",c.id="shareBtnTwitter",c.className="share-button-link",c.target="_blank",s.appendChild(c),n.appendChild(s);var d=document.createElement("LI");d.className="share-button";var p=document.createElement("A");p.href="https://www.linkedin.com/shareArticle?mini=true&url="+t+"&title="+i,p.textContent="Share on LinkedIn",p.title="Share this page on LinkedIn",p.id="shareBtnLinkedIn",p.className="share-button-link",p.target="_blank",d.appendChild(p),n.appendChild(d);var h=document.createElement("LI");h.className="share-button";var u=document.createElement("A");u.href="https://pinterest.com/pin/create/button/?url="+t+"&description="+i,u.textContent="Share on Pinterest",u.title="Share this page on Pinterest",u.id="shareBtnPinterest",u.className="share-button-link",u.target="_blank",h.appendChild(u),n.appendChild(h),o.appendChild(n)}a.appendChild(o),(e=document.getElementById("bodyMainText"))&&e.appendChild(a)}}(),function(e){(e=document.getElementById("listFilter"))&&(e.oninput=function(){var e,t=document.getElementById("listFilter").value.toLowerCase(),a=document.getElementById("brgyList").getElementsByTagName("li"),n=a.length;for(e=0;e<n;e++)a[e].innerHTML.toLowerCase().indexOf(t)>-1?a[e].style.display="":a[e].style.display="none"})}(),Array.prototype.slice.call(document.querySelectorAll("details")).forEach(function(e){e.addEventListener("toggle",function(t){var a=e.querySelector("summary");a&&(a.title=e.open?"hide":"show")})}),(k=document.getElementById("topAnchor"))&&(k.style.display="none"),function(){var e=document.getElementById("sectionAdjBgys"),t=document.getElementsByClassName("listSortable")[0];if(e&&t){var a=document.createElement("DIV");a.id="listSortWrap";var n=document.createElement("BUTTON");n.textContent="Sort by name",n.className="listSorterBtn",n.setAttribute("aria-label","Sort list by barangay name");var o=document.createElement("BUTTON");o.textContent="Sort by city/town",o.className="listSorterBtn",o.setAttribute("aria-label","Sort list by city or town name"),a.appendChild(n),a.appendChild(o),e.insertBefore(a,t),n.onclick=function(){var e,a,n,o,r=0,l=t.getElementsByTagName("LI"),i=l.length-1;for(a=!0,o="asc";a;){for(a=!1,e=0;e<i;e++)if(n=!1,"asc"==o){if(l[e].textContent.toLowerCase()>l[e+1].textContent.toLowerCase()){n=!0;break}}else if("desc"==o&&l[e].textContent.toLowerCase()<l[e+1].textContent.toLowerCase()){n=!0;break}n?(l[e].parentNode.insertBefore(l[e+1],l[e]),a=!0,r++):0===r&&"asc"===o&&(o="desc",a=!0)}},o.onclick=function(){var e,a,n,o,r=0,l=t.getElementsByTagName("LI"),i=l.length-1;for(a=!0,o="asc";a;){for(a=!1,e=0;e<i;e++)if(n=!1,"asc"==o){if(l[e].innerHTML.toLowerCase()>l[e+1].innerHTML.toLowerCase()){n=!0;break}}else if("desc"==o&&l[e].innerHTML.toLowerCase()<l[e+1].innerHTML.toLowerCase()){n=!0;break}n?(l[e].parentNode.insertBefore(l[e+1],l[e]),a=!0,r++):0===r&&"asc"===o&&(o="desc",a=!0)}}}}(),function(){var e=document.head;if(e){var t=document.createDocumentFragment(),a=document.createComment("Global site tag (gtag.js) - Google Analytics"),n=document.createElement("SCRIPT");n.async=!0,n.src="https://www.googletagmanager.com/gtag/js?id=UA-184633896-1";var o=document.createElement("SCRIPT");o.textContent="  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag('js', new Date());\n\n  gtag('config', 'UA-184633896-1');",t.appendChild(a),t.appendChild(n),t.appendChild(o);var r=document.createComment("Global site tag (gtag.js) - Google Analytics"),l=document.createElement("SCRIPT");l.async=!0,l.src="https://www.googletagmanager.com/gtag/js?id=UA-184753318-1";var i=document.createElement("SCRIPT");i.textContent="  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag('js', new Date());\n\n  gtag('config', 'UA-184753318-1');",t.appendChild(r),t.appendChild(l),t.appendChild(i),e.appendChild(t)}}(),A=document.querySelector("main article"),(E=document.getElementById("sectionAdjBgys"))&&function(){var e=document.getElementById("listSortWrap"),t=document.querySelectorAll("#sectionAdjBgys > ul > li");if(e&&t&&t.length>2){var a=document.createComment("\x3c!-- Horizontal-fixed-mobile-ad --\x3e"),n=document.createElement("DIV");n.style.margin="1rem auto",n.style.textAlign="center";var o=document.createElement("INS");o.classList.add("adsbygoogle","manual_responsive_ad"),o.style="display:inline-block;",o.setAttribute("data-ad-client","ca-pub-2659927017888695"),o.setAttribute("data-ad-slot","3105552637");var r=document.createElement("SCRIPT");r.innerHTML="(adsbygoogle = window.adsbygoogle || []).push({});",n.appendChild(o),n.appendChild(r),A.insertBefore(a,E),A.insertBefore(n,E)}}()}()}();