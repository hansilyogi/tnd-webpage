$(document).ready(function () {

    loaddata();

    function loaddata() {
        $.ajax({
            type: "POST",
            url: "http://15.207.46.236/" + "admin/businessCategory",
            dataType: "json",
            cache: false,
            beforeSend: function () {
            $("#displaydata").html(
            '<tr><td colspan="4" class="text-center font-weight-bold">Loading...</td></tr></center>'
                );
            },
            success: function (data) {
                console.log(data);
                if (data.IsSuccess == true) {
                    if (data.Data.length > 0) {
                        $("#displaydata").html("");
                        for (i = 0; i < data.Data.length; i++) {
                            var dataimg  = data.Data[i].categoryImage == "" ? "img/default.png" : data.Data[i].categoryImage;
                            $("#displaydata").append(
                                `<div class="col-md-4">
                                    <a href="directorylisting.php?did=`+data.Data[i]._id+`">
                                    <div class="mn-img">
                                        <img src="`+ dataimg +`" />
                                        <div class="mn-title">`+
                                        data.Data[i].categoryName+   
                                        `</div>
                                    </div>
                                    </a>
                                </div>`
                            );
                        }
                    } else {
                        $("#displaydata").html(
                            '<tr><td colspan="5" class="text-center font-weight-bold">No record Found!</td></tr></center>'
                        );
                    }
                } else {
                        alert(data.data);
                    }
            },
        });
    }
});