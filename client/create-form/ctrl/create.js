

$.ajax({
    url: "../../server/api/api.php",
    type: 'GET',
    data:{table:'directors',
          adata:{id:"all"}
        },
    success: function(data) {
    
      let arr=data
        
         for (let i=0; i < arr.length; i++) {

          $("select").append("<option>"+arr[i].name+"</option>")

         }
    }
});
