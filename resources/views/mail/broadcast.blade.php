<style>
    .center {
        text-align: center;
        background-color: #5b438;
    }
    h2, b {
        color: #5b438;
    }
    body {
        margin: 5%;
        background-color: #babab;
        color: black;
        text-align: left;
    }
</style>
<div class="card pd-10">
    <h2 class="card-header bg1 center text-white">Nouveau post</h2>
</div>
<div class="card-body pd-10 bg-light">
    <b>{{$datas->category->name}}</b> <br>
    <b>{{$datas->title}}</b> <br>
    <b>par:</b> {{$datas->user->name}} <br> <br>
    <p>Lisez l'article complet en suivant<a href="{{\URL::to('/posts/'.$datas->id)}}"> ce lien </a> <br>
    
    Connectez-vous à votre compte, soyez le premier à laisser un commentaire. et si vous ne souhaitez plus recevoir notre nouvelle newsletter, désabonnez-vous via <a href="{{\URL::to('/unsubscribe')}}"> ce lien</a></p><br>
    <p><b class="fg1 text-center">{{ config('app.name', 'Laravel') }} </b> Vous remercie</p>
</div>