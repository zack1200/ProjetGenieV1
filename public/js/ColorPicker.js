$(document).ready(function() {
    $('input[type="color"]').each(function() {
      $(this).spectrum({
        showPaletteOnly: true,
        togglePaletteOnly: true,
        togglePaletteMoreText: 'plus',
        togglePaletteLessText: 'moins',
        colorPalette: [
          ['#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff'],
          ['#f00', '#f90', '#ff0', '#0f0', '#0ff', '#00f', '#90f', '#f0f'],
          ['#f4cccc', '#fce5cd', '#fff2cc', '#d9ead3', '#d0e0e3', '#cfe2f3', '#d9d2e9', '#ead1dc'],
          ['#ea9999', '#f9cb9c', '#ffe599', '#b6d7a8', '#a2c4c9', '#9fc5e8', '#b4a7d6', '#d5a6bd'],
          ['#e06666', '#f6b26b', '#ffd966', '#93c47d', '#76a5af', '#6fa8dc', '#8e7cc3', '#c27ba0'],
          ['#c00', '#e69138', '#f1c232', '#6aa84f', '#45818e', '#3d85c6', '#674ea7', '#a64d79']
        ]
      });
    });
  });
  