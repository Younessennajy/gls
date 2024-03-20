@include('head')
<body>
<div id="loader" class="loader">
    <span class="loader-text">loading</span>
    <span class="load"></span>
</div>
{{-- header --}}
@include('welcome.header')


{{-- home --}}
@include('welcome.home')


{{-- about --}}
@include('welcome.about')


{{-- facts --}}
@include('welcome.facts')


{{-- gallery --}}
@include('welcome.Activities')


{{-- gallery --}}
@include('welcome.gallery')


{{-- Contact --}}
@include('welcome.contact')


{{-- Footer --}}
@include('welcome.footer')


<script>
    function navigateTo(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
</body>
</html>
