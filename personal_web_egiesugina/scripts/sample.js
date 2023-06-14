if (CKEDITOR.env.ie && CKEDITOR.env.version < 9)
  CKEDITOR.tools.enableHtml5Elements(document);

CKEDITOR.config.height = "68%";
CKEDITOR.config.width = "auto";

var initSample = (function () {
  CKEDITOR.config.filebrowserUploadUrl = "../admin/upload-handler.php";
  CKEDITOR.config.filebrowserUploadMethod = "form";

  var wysiwygareaAvailable = isWysiwygareaAvailable(),
    isBBCodeBuiltIn = !!CKEDITOR.plugins.get("bbcode");

  return function () {
    var editorElement = CKEDITOR.document.getById("editor");

    // :(((
    if (isBBCodeBuiltIn) {
      editorElement.setHtml(
        "Hello world!\n\n" +
          "I'm an instance of [url=https://ckeditor.com]CKEditor[/url]."
      );
    }

    CKEDITOR.replace("editor", {
      filebrowserImageUploadUrl: "../admin/upload-handler.php?",
      filebrowserImageUploadMethod: "form",
      filebrowserBrowseUrl: "../admin/images/upload",
      filebrowserUploadUrl: "../admin/upload-handler.php?"
    });
  };

  function isWysiwygareaAvailable() {
    // If in development mode, then the wysiwygarea must be available.
    // Split REV into two strings so builder does not replace it :D.
    if (CKEDITOR.revision == "%RE" + "V%") {
      return true;
    }

    return !!CKEDITOR.plugins.get("wysiwygarea");
  }
})();
