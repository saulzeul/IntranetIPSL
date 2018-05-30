//Funciones Dropzone --------------------------------//
//-----Header -------//
$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#header").dropzone({
        url: "avisos/subirfotosHeader",
        acceptedFile: "image/*",
        addRemoveLinks: true,
        //Eliminar foto de galeria
        removedfile: function(file){
          var name = file.name;
          $.ajax({
            type: "post",
            url: "avisos/eliminarfotosHeader",
            data:{ file: name},
            dataType: 'html'
          });
        //Eliminar foto en el html
          var previewElement;
          return (previewElement = file.previewElement) != null ? (
            previewElement.parentNode.removeChild(
              file.previewElement)) : (void 0);
        },
        // Mostrar fotos en el panel
        init: function(){
          var me = this;
          $.get("avisos/mostrarfotosHeader" , function(data){
            if (data.length > 0){
              $.each(data, function(key, value){
                var mockFile = value;
                me.emit("addedfile",mockFile);
                me.emit("thumbnail", mockFile,"images/header/" + value.name);
                me.emit("complete", mockFile);
              });
            }
          });
        },
        // Mensaje de que se envio correctamente
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});
//------------Left----------//
$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#left").dropzone({
        url: "avisos/subirfotosLeft",
        acceptedFile: "image/*",
        addRemoveLinks: true,
        //Eliminar foto de galeria
        removedfile: function(file){
          var name = file.name;
          $.ajax({
            type: "post",
            url: "avisos/eliminarfotosLeft",
            data:{ file: name},
            dataType: 'html'
          });
        //Eliminar foto en el html
          var previewElement;
          return (previewElement = file.previewElement) != null ? (
            previewElement.parentNode.removeChild(
              file.previewElement)) : (void 0);
        },
        // Mostrar fotos en el panel
        init: function(){
          var me = this;
          $.get("avisos/mostrarfotosLeft" , function(data){
            if (data.length > 0){
              $.each(data, function(key, value){
                var mockFile = value;
                me.emit("addedfile",mockFile);
                me.emit("thumbnail", mockFile,"images/left/" + value.name);
                me.emit("complete", mockFile);
              });
            }
          });
        },
        // Mensaje de que se envio correctamente
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});

//------------Center----------//
$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#center").dropzone({
        url: "avisos/subirfotosCenter",
        acceptedFile: "image/*",
        addRemoveLinks: true,
        //Eliminar foto de galeria
        removedfile: function(file){
          var name = file.name;
          $.ajax({
            type: "post",
            url: "avisos/eliminarfotosCenter",
            data:{ file: name},
            dataType: 'html'
          });
        //Eliminar foto en el html
          var previewElement;
          return (previewElement = file.previewElement) != null ? (
            previewElement.parentNode.removeChild(
              file.previewElement)) : (void 0);
        },
        // Mostrar fotos en el panel
        init: function(){
          var me = this;
          $.get("avisos/mostrarfotosCenter" , function(data){
            if (data.length > 0){
              $.each(data, function(key, value){
                var mockFile = value;
                me.emit("addedfile",mockFile);
                me.emit("thumbnail", mockFile,"images/center/" + value.name);
                me.emit("complete", mockFile);
              });
            }
          });
        },
        // Mensaje de que se envio correctamente
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});

//------------rightbottom----------//
$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#right-bottom").dropzone({
        url: "avisos/subirfotosRightbottom",
        acceptedFile: "image/*",
        addRemoveLinks: true,
        //Eliminar foto de galeria
        removedfile: function(file){
          var name = file.name;
          $.ajax({
            type: "post",
            url: "avisos/eliminarfotosRightbottom",
            data:{ file: name},
            dataType: 'html'
          });
        //Eliminar foto en el html
          var previewElement;
          return (previewElement = file.previewElement) != null ? (
            previewElement.parentNode.removeChild(
              file.previewElement)) : (void 0);
        },
        // Mostrar fotos en el panel
        init: function(){
          var me = this;
          $.get("avisos/mostrarfotosRightbottom" , function(data){
            if (data.length > 0){
              $.each(data, function(key, value){
                var mockFile = value;
                me.emit("addedfile",mockFile);
                me.emit("thumbnail", mockFile,"images/center/" + value.name);
                me.emit("complete", mockFile);
              });
            }
          });
        },
        // Mensaje de que se envio correctamente
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});
