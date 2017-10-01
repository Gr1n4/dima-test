'use strict';

(function() {
  let selectRegion = $('#select-region')
    , selectCity = $('#select-city');

  $.ajax({
    url: `${baseUrl}/geo/region`,
    method: 'GET',
    contentType: 'application/json'
  })
    .done(regions => {
      appendOptions.call(selectRegion, regions);
      selectRegion.change(onChangeRegions);
      onChangeRegions();
    });

  function appendOptions(entities) {
    this.children().remove();
    entities.forEach(_entity => {
      let option = document.createElement('option');
      $(option)
        .text(_entity.title)
        .attr('value', _entity.id)
        .appendTo(this);
    });
  }

  function onChangeRegions() {
    const regionId = selectRegion.val();
    $.ajax({
      url: `${baseUrl}/geo/region/${regionId}`,
      method: 'GET',
      contentType: 'application/json'
    })
      .done(cities => {
        appendOptions.call(selectCity, cities);
      });
  }
}());
