<script src="https://www.youtube.com/iframe_api"></script>
<script src="{{ asset('dashboard/assets/js/jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        // Load the YouTube iframe API script
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    });
</script>
<script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>
