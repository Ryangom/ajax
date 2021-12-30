$(document).ready(function () {
    function load(){
        $.ajax({
            type: "POST",
            url: "./php/load.php",
            success: function (data) {
                $("#table_data").html(data);
            }
        });
    }
    load();



    // insert
    $('#submit').on("click", function (e) {
        e.preventDefault();

        let name= $('#name').val();
        let dep= $('#department').val();
        let uni= $('#uni').val();

        $.ajax({
            type: "post",
            url: "./php/insert.php",
            data: {fname:name, dep_name:dep, uni_name:uni},
            success: function (data) {
                if(data == 1){
                    load();
                }
                else{
                    alert('somting went worng');
                }

            }
        });
    });

    // delete
    $(document).on("click",".delete_btn" , function () {
        let user_id =$(this).data("id");
        let tr=this;

        $.ajax({
            type: "post",
            url: "./php/delete.php",
            data: {userId : user_id},
            success: function (data) {
                if(data==1){
                    $(tr).closest("tr").fadeOut();
                }
            }
        });
    });

});