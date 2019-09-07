var froalaConfig = {
    methods: {
        getFroalaConfig(id, folder) {
            console.log(this.id);
            console.log(this.folder);
            return {
                toolbarButtons: {
                    'moreText': {
                        'buttons': ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
                    },
                    'moreParagraph': {
                        'buttons': ['alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight', 'outdent', 'indent', 'quote']
                    },
                    'moreRich': {
                        'buttons': ['insertLink', 'insertImage', 'insertVideo', 'insertTable', 'fontAwesome', 'specialCharacters', 'embedly', 'insertFile', 'insertHR']
                    },
                    'moreMisc': {
                        'buttons': ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html', 'help']
                    }
                },
                placeholderText: 'Edit Your Content Here!',
                attribution: false,
                height: 250,
                imageUploadParam: 'image',
                imageUploadParams: {
                    id: id,
                    folder: folder
                },
                requestHeaders: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Requested-With': 'XMLHttpRequest'
                },
                imageUploadURL: "/dashboard/images/store ",
                imageAllowedTypes: ['jpeg', 'jpg', 'png'],
                imageUploadMethod: 'POST',
            }
        },
    },
};
export default froalaConfig;