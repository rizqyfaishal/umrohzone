<script>
    $(document).ready(function() {
        $('select#provinsi_id').on('change',function(){
            updateSelect();
        });
        updateSelect();
    });

    function updateSelect(){
        var val = $('select#provinsi_id').val();
        var con = $('select#regency_id');
        if(val != ''){
            $(con).html('');
            $.get('/api/provinsi/' + val,function(data){
                if(data.status){
                    var data = data.data;
                    for(var i = 0;i<data.length;i++){
                        var option = document.createElement('option');
                        option.value = data[i].id;
                        option.innerText = data[i].name;
                        $(con).append(option);
                    }

                }
            });
        } else {
            $(con).html('');
            $(con).append('<option selected>Kota</option>');
        }
    }

</script>