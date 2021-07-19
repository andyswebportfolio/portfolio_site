if (!document.getElementById("EmbedSocialIFrame")) {
    var jsEmbed = document.createElement("script");
    jsEmbed.id = "EmbedSocialIFrame", jsEmbed.src = "https://embedsocial.com/js/iframe.js", document.getElementsByTagName("body")[0].appendChild(jsEmbed)
}
if (!document.getElementById("EmbedSocialJsLightbox")) {
    var jsEmbed = document.createElement("script");
    jsEmbed.id = "EmbedSocialJsLightbox";
    jsEmbed.src = "https://embedsocial.com/embedscript/embed_lightbox.min.js?v=1.2";
    document.getElementsByTagName("body")[0].appendChild(jsEmbed);
}
if (!document.getElementById("EmbedSocialLightboxCSS")) {
    var cssEmbed = document.createElement("link");
    cssEmbed.id = "EmbedSocialLightboxCSS", cssEmbed.rel = "stylesheet", cssEmbed.href = "https://embedsocial.com/embedscript/embedsocial_lightbox_style.min.css";
    document.getElementsByTagName("head")[0].appendChild(cssEmbed);
}
EMBEDSOCIAL = {
    getEmbedData : function(albumRef, albumDiv) {
        var iframes = albumDiv.getElementsByTagName('iframe');
        if (iframes.length <= 0) {
            var ifrm = document.createElement("iframe");
            var srcIfrm = "https://embedsocial.com/api/pro_album/facebook/" + albumRef;
            ifrm.setAttribute("src", srcIfrm);
            ifrm.setAttribute("id", 'embedIFrame_' + albumRef + Math.random().toString(36).substring(7));
		    ifrm.style.width = "0px";
		    ifrm.style.height = "0px";
		    ifrm.style.maxHeight = "100%";
		    ifrm.style.maxWidth = "100%";
		    ifrm.style.minHeight = "100%";
		    ifrm.style.minWidth = "100%";
		    ifrm.style.border = "0";
            ifrm.setAttribute("scrolling", "yes");
            albumDiv.appendChild(ifrm);
            EMBEDSOCIAL.initResizeFrame();
        }
    },
    initResizeFrame : function() {
        var siteUrl = window.location.href;
        if (document.getElementById("EmbedSocialIFrame") && "function" === typeof iFrameResize) {
            iFrameResize ({
                messageCallback : function(messageData){ 
                    EMBEDSOCIAL.createLightBox(messageData.message);
                }
            });
        } else {
            setTimeout(EMBEDSOCIAL.initResizeFrame, 200);
        }
    },
    createLightBox : function(data) {
        if (document.getElementById('embedSocialLightboxDiv') && document.getElementById('embedSocialLightboxDiv').getAttribute('data-ref') == data.albumRef && document.getElementById('embedSocialLightboxDiv').getAttribute('data-num') == data.albumNum && document.getElementById('embedSocialLightboxDiv').getAttribute('data-captions') == data.showCaptions) {
            for (var i = 0; i < data.albumImages.length; i++) {
                if (data.albumImages[i].click == true) {
                    EMBEDSOCIAL.openLightBox(data.albumImages[i].id);
                }
            }
        } else {
            if (!document.getElementById('embedSocialLightboxDiv')) {
                var divImages = document.createElement("div");
                divImages.setAttribute("data-ref", data.albumRef);
                divImages.setAttribute("data-num", data.albumNum);
                divImages.setAttribute("data-captions", data.showCaptions);
                divImages.setAttribute("class", 'embedSocialLightboxDiv');
                divImages.setAttribute("id", 'embedSocialLightboxDiv');
                divImages.style.display = "none";
                divImages.style.direction = "ltr";
                document.body.appendChild(divImages);
            } else {
                divImages = document.getElementById('embedSocialLightboxDiv'); 
                divImages.setAttribute("data-ref", data.albumRef);
                divImages.setAttribute("data-num", data.albumNum);
                divImages.setAttribute("data-captions", data.showCaptions);
                divImages.innerHTML = '';             
            }
            for(var i = 0; i < data.albumImages.length; i++) {
                var divHref = document.createElement("a");
                divHref.setAttribute("href", data.albumImages[i].href);
                divHref.setAttribute("id", "embed-lightbox-" + data.albumImages[i].id);
                var divImg = document.createElement("img");
                divImg.setAttribute("src", data.albumImages[i].href);
                if (data.showCaptions == true) {
                    divImg.setAttribute("alt", data.albumImages[i].caption);
                }
                divHref.appendChild(divImg);
                divImages.appendChild(divHref);
            }
            if (data.showCaptions == true) {
                embedLightBox.run('.embedSocialLightboxDiv', {
                    captions : function(element) {
                        return element.getElementsByTagName('img')[0].alt;
                    }
                });
            } else {
                embedLightBox.run('.embedSocialLightboxDiv');
            }
            for (var i = 0; i < data.albumImages.length; i++) {
                if (data.albumImages[i].click == true) {
                    EMBEDSOCIAL.openLightBox(data.albumImages[i].id);
                }
            }
        }
    },
    openLightBox : function(imageId) {
        document.getElementById("embed-lightbox-" + imageId).click();
    }
}

var embedsocialAlbums = document.getElementsByClassName("embedsocial-album");
var embedsocialAlbumsRef = [];
for (i = 0; i < embedsocialAlbums.length; i++) {
    var embedsocialAlbumRef = embedsocialAlbums[i].getAttribute("data-ref");
    EMBEDSOCIAL.getEmbedData(embedsocialAlbumRef, embedsocialAlbums[i]);
}