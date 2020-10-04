<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <script>
    $(document).on('click', '#buscar', function(){
        var cep = $("#temp").val();
        $.ajax({
            type:"get",
            url: "https://api.hgbrasil.com/weather?woeid="+cid,
            success: function(data){
                var conteudo = '';
                conteudo+= "<p>Logradouro:"+data.logradouro+"</p>";
                conteudo+= "<p>Bairro:"+data.bairro+"</p>";
                conteudo+= "<p>localidade:"+data.localidade+"</p>";
                conteudo+= "<p>uf:"+data.uf+"</p>";

                $("#dados").append(conteudo);
            }
        });
    });
  </script>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">código da cidade:</label>
            <input type="text" class="form-control" id="cid">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
    <div class="form-group">
            <button id="buscar" class="btn btn-primary btn-block">Buscar</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div id="dados"></div>
    </div>
</div>
