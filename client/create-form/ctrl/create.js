

$.ajax({
    url: "../../server/api/api.php",
    type: 'GET',
    data:{table:'directors',
          adata:{id:"all"}
        },
    success: function(data) {
         console.log(data)
        
         for (let i=0; i < data.length; i++) {

          $("select").append("<option>"+data[i].name+"</option>")

         }
    }
});
