<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<p><b class="fg1 text-center">Contact {{ config('app.name', 'Laravel') }} </b></p>
<p><b>De:</b>  {{ $data['name'] }}</p>
<p><b>Sujet:</b>  {{ $data['subject'] }}</p>
<p><b>Corps du message:</b>  {{ $data['message'] }}.</p> <br>
<p>Ce serait appréciable, si vous passiez par <a href="mailto:{{$data['email']}}"> cette rétroaction</a>.</p>
