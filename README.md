# learning php code


##### enable preview Sublime Text

check this url: https://packagecontrol.io/packages/Preview


##### Preview Config Code Package Setting ? Preview > Setting User (add following code)

```
{
    "rules": [
        // prohibit previewing local files (i.e. files that don't match any rule)
        {
            "url": ""
        },

        // allow opening local .htm, .html and .xhtml in browser
        {
            "path_suffix": ".htm",
            "url_prefix": "file:///"
        },
        {
            "path_suffix": ".html",
            "url_prefix": "file:///"
        },
        {
            "path_suffix": ".xhtml",
            "url_prefix": "file:///"
        },

        // sample website
        {
            // for all files matching the path_prefix, construct URL using url_prefix
            "path_prefix": "F:/laragon/Projects/PHPL/demo",
            "url_prefix": "http://phpl.dev/demo"
            // append this string to all URLs
            //"url_append": "?debug"
        },

        {
            // for all files matching the path_prefix, construct URL using url_prefix
            "path_prefix": "F:/laragon/Projects/PHPL/demodl",
            "url_prefix": "http://phpl.dev/demodl"
            // append this string to all URLs
            //"url_append": "?debug"
        }
    ]
}

```

