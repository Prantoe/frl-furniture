<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/image-uploader.min.js') }}"></script>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
      
<script>

$('.input-images').imageUploader({
{{-- preloaded: preloaded, --}}
imagesInputName: 'photos',
});


</script>