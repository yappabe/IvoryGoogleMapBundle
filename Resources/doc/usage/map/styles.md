# Styles

You can define map styles in your config file.

A typical google map style looks like the following:
```json
[
  {
    "featureType": "administrative",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#444444"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "all",
    "stylers": [
      {
        "color": "#f2f2f2"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "all",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "all",
    "stylers": [
      {
        "saturation": -100
      },
      {
        "lightness": 45
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "all",
    "stylers": [
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "all",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "all",
    "stylers": [
      {
        "color": "#46bcec"
      },
      {
        "visibility": "on"
      }
    ]
  }
]
```

This would translate to the following yaml config:

```yaml
ivory_google_map:
    map:
        map_styles:
            - featureType: "administrative"
              elementType: "labels.text.fill"
              stylers:
                - color: "#444444"
            - featureType: "landscape"
              elementType: "all"
              stylers:
                - color: "#f2f2f2"
            - featureType: "poi"
              elementType: "all"
              stylers:
                - visibility: "off"
            - featureType: "road"
              elementType: "all"
              stylers:
                - saturation: -100
                - lightness: 45
            - featureType: "road.highway"
              elementType: "all"
              stylers:
                - visibility: "simplified"
            - featureType: "road.arterial"
              elementType: "labels.icon"
              stylers:
                - visibility: "off"
            - featureType: "transit"
              elementType: "all"
              stylers:
                - visibility: "off"
            - featureType: "water"
              elementType: "all"
              stylers:
                - color: "#46bcec"
                - visibility: "on"
```