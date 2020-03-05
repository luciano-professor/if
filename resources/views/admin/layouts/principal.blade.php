@include('admin.layouts.header')

@include('admin.layouts.menu')

<div class="container">

    <div class="mt-3">
        <h3>
            Cursos
            <small class="text-muted">Listar</small>
        </h3>
    </div>

    {{-- Abaixo vamos colocar a parte principal que mudará para cada view --}}
    {{-- O yeild define uma área onde será inserido uma seção com conteudo dinamico --}}

    @yield('conteudo-principal')


</div> {{-- Container --}}

@include('admin.layouts.footer')
