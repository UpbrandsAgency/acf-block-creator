{
    "name": "acf/{SLUG}",
    "title": "{NAME}",
    "description": "",
    "category": "upbrands",
    "icon": "admin-comments",
    "acf": {
        "mode": "edit",
        "renderCallback": ["App\\BlockControllers\\BaseBlock", "render"]
    },
    "supports": {
        "anchor": true
    }
}