@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pdfviewer.jquery.css') }}" />
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div id="pdfviewer" ></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <script src="{{ asset('js/pdfviewer.jquery.js') }}"></script>
    <script type="text/javascript">
        const options = {
            height: 650,
        };

        $('#pdfviewer').pdfViewer('../revistas/REVISTA-SICOM-DICIEMBRE_2023.pdf', options);

    </script>
@endsection