@foreach(['error','success','info','warning'] as $msg)
    @if(session()->has($msg))
        <script>
            $.toast({
                heading: '{{session()->get($msg)}}!',
                text: '',
                position: 'top-right',
                loaderBg: '#3b98b5',
                icon: '{{$msg}}',
                hideAfter: 3000,
                showHideTransition: 'fade',
                stack: 1
            });
        </script>
    @endif
@endforeach