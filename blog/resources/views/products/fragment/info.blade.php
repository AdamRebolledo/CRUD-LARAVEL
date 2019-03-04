@if(Session::has('info'))
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert"> 
&times;
</button>
{{ Session::get('info') }}
</div>

@endif

<!-- //data-dismiss usa el js de B para borrarl la alerta-->