


<script type="text/javascript">
    document.getElementById('frmSearch').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:http://www.google.com ' + document.getElementById('txtSearch').value;
        return false;
    }
</script>