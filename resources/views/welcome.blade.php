@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Filemanager</h3>
			<hr>
			<button type="button" onclick="BrowseServer('id_of_the_target_input');">Pick Image</button>
    		<input type="text" id="id_of_the_target_input"/>
			<textarea name="" id="textarea" cols="30" rows="10"></textarea>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ url('') }}/public/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/public/tinymce/tinymce_editor.js"></script>
  <script type="text/javascript">
      // File Picker modification for FCK Editor v2.0 - www.fckeditor.net
     // by: Pete Forde <pete@unspace.ca> @ Unspace Interactive
     var urlobj;

     function BrowseServer(obj)
     {
          urlobj = obj;
          OpenServerBrowser(
          "{{url('')}}/admin/filemanager/show",
          screen.width * 0.7,
          screen.height * 0.7 ) ;
     }

     function OpenServerBrowser( url, width, height )
     {
          var iLeft = (screen.width - width) / 2 ;
          var iTop = (screen.height - height) / 2 ;
          var sOptions = "toolbar=no,status=no,resizable=yes,dependent=yes" ;
          sOptions += ",width=" + width ;
          sOptions += ",height=" + height ;
          sOptions += ",left=" + iLeft ;
          sOptions += ",top=" + iTop ;
          var oWindow = window.open( url, "BrowseWindow", sOptions ) ;
     }

     function SetUrl( url, width, height, alt )
     {
          document.getElementById(urlobj).value = url ;
          oWindow = null;
     }
     </script>

<script type="text/javascript">
editor_config.selector = "textarea";
editor_config.path_absolute = "{{ url('') }}/admin/";
tinymce.init(editor_config);
</script>
@endsection