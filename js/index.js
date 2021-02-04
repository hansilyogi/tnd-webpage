$(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var page = urlParams.get('page');
    console.log(page);
    if(page == "directorylisting"){
        $("#search_bar").hide();
    }
    else{
        $("#search_bar").show();
    }
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
                                    <a href="directorylisting.php?did=`+data.Data[i]._id+`&page=directorylisting">
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

    $(document).on('click', "#search-addon",function(){
        console.log("2");
        $.ajax({
            type: "POST",
            url: "http://15.207.46.236/" + "admin/findbykeyword",
            data : { "keyword" : $("#inputsearch").val()},
            dataType: "json",
            cache: false,
            beforeSend: function () {
            $("#displaydata").html(
            '<tr><td colspan="4" class="text-center font-weight-bold">Loading...</td></tr></center>'
                );
            },
            success : function(data){
                console.log(data);
                $("#displaydata").html("");
                if(data.Data.length > 0){
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
                }
                else{
                    $("#displaydata").append(
                        `<div class="row">
                        <div class="alert alert-danger" role="alert">
                            OOPS Sorry No Data Found !!!
                        </div>
                        </div>`
                    );
                }
            }
        });
    });
});