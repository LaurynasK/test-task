var Main = (function () {
    
    var $tags = $('input[name=tags]');
    var tags = [];
    
    var $dropZone = '.dropzone'; 
    var $uploadButton = $('#imgsubbutt');
    
    Dropzone.autoDiscover = false;
    
    $tags.tagify()
        .on('add', function(e, tagName){
            tags.push(tagName.value);
    })
        .on('remove', function(e, tagName){
            JsArrayCleanerByItemName(tags, tagName.value)
    })
    
    var file= new Dropzone($dropZone,{
        url: 'do_upload',
    	maxFilesize: 8192,  
    	method:"post",
    	paramName:"userfile",
    	uploadMultiple: true,
    	autoProcessQueue: false,
    	acceptedFiles: "image/jpeg,image/png,image/gif",
    		complete: function() {
        console.log("All files have been uploaded ");
        },
    });
        
    $uploadButton.click(function(){           
        file.processQueue();
    }); 
        
    file.on('sending', function(file, xhr, formData){
        formData.append('title', $('input[name=title]').val());
        formData.append('tags', JSON.stringify(tags));
    });
        
    file.on("success", function(file, responseText) {
        console.log(responseText);
    });
        
    file.on("error", function(file, responseText) {
        console.log(responseText);
    });
    
    function JsArrayCleanerByItemName(arr, name) {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] == name) {
                arr.splice(i, 1);
                break;
            }
        }
    }
    
    return {
        cleanArray: JsArrayCleanerByItemName,
    }
    
})();