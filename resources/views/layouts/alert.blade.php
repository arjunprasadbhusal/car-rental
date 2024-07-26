@if(Session::has('success'))
<div class="fixed left-4 bottom-4 bg-indigo-700 px-7 py-2 rounded-lg shadow-sm border-l-8
 border-indigo-400 z-20" id="alertmessage">
    <p class="text-white text-xl font-bold"><i class="ri-check-double-line text-3xl"></i>
    {{session('success')}}</p>

</div>
<script>
    setTimeout(function() {
        document.getElementById('alertmessage').style.
        display='none'

        
    },2000);
</script>
@endif


@if(Session::has('error'))
<div class="fixed left-4 bottom-4 bg-red-700 px-7 py-2 rounded-lg shadow-sm border-l-8
 border-red-400 z-20" id="alertmessage">
    <p class="text-white text-xl font-bold"><i class="ri-error-warning-fill text-3xl"></i>
    {{session('error')}}</p>

</div>
<script>
    setTimeout(function() {
        document.getElementById('alertmessage').style.
        display='none'

        
    },2000);
</script>
@endif

