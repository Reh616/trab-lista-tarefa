<div>
    @if (session()->has('message'))
        
            {{ session()->get('message') }}
    @elseif($errors->any())
        @foreach ($errors->all() as $error)
            {{ 'Preencha o campo corretamente!' }}
        @endforeach
    @endif
</div>