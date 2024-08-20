<script src="{{ asset('js/jquery-3.7.0.js') }}" crossorigin="anonymous"></script>
@vite('resources/js/app.js')
<script defer src="{{ asset('js/pdfmake.min.js') }}"></script>
<script defer src="{{ asset('js/vfs_fonts.js') }}"></script>
<script defer src="{{ asset('js/datatables.min.js') }}"></script>
<script defer src="{{ asset('js/perfect-scrollbar.js') }}"></script>
<script defer src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

@include('sweetalert::alert')

@yield('third_party_scripts')

@stack('page_scripts')

@livewireScripts
