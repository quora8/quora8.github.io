<?php $title = "Upload SGF"; include("header.phtml"); ?>

<style type="text/css">
form {
    margin: 0 0 15px 0;
    padding: 0;
}
input[type=submit] {
    display: block;
    margin: 10px 0 0 0;
}
#fetch-form input[name=url] {
    width: 400px;
    display: block;
}
#paste-form textarea {
    width: 400px;
    height: 200px;
    display: block;
}
h3 {
    padding-top: 10px;
    border-top: 1px solid #aaa;
}
ul {
    margin: 10px 0 20px 0;
    padding: 0 0 0 20px;
}
ul p {
    margin: 0;
    padding: 0;
    zoom: normal;
}
ul li {
    margin: 0 0 10px 0;
    padding: 0;
    zoom: normal;
}
</style>

<div id="text-content">

<h2>Upload SGF</h2>

<p><strong>Please note:</strong></p>

<ul>
    <li><p>Any games you upload will be publicly viewable.</p></li>
    <li><p>Copyright laws on game records vary from country to country.
        It is your responsibility to upload only SGF
        files that are legal for you to upload. Games with commentary are generally
        copyrighted and you should not upload them without the owner's permission.
        Copyrighted games uploaded without permission will be removed.</p></li>
</ul>

<h3>SGF File Upload</h3>

<form id="upload-form" action="backend/upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="type" value="file">
    <input type="file" name="sgf_file">
    <input type="submit" value="Upload">
</form>

<h3>Fetch SGF from a URL</h3>

<form id="fetch-form">
    <input name="url">
    <input type="submit" value="Fetch">
</form>

<h3>Paste Raw SGF</h3>

<form id="paste-form" action="backend/upload.php" method="post">
    <input type="hidden" name="type" value="paste">
    <textarea name="sgf"></textarea>
    <input type="submit" value="Upload">
</form>

</div>

<script type="text/javascript">
eidogo.util.addEvent(eidogo.util.byId('fetch-form'), "submit", function(evt) {
    if (!(/http:\/\//.test(this.url.value))) {
        this.url.value = "http://" + this.url.value;
    }
    location.href = "/#url:" + this.url.value;
    eidogo.util.stopEvent(evt);
});
</script>

<?php include("footer.phtml"); ?>