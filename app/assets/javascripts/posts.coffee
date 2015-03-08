# Place all the behaviors and hooks related to the matching controller here.
# All this logic will automatically be available in application.js.
# You can use CoffeeScript in this file: http://coffeescript.org/

converter = new ( Showdown.converter )

$('document').ready ->

  $('#markdown-preview').html( converter.makeHtml( $('.markdown' ).val() ) )
  $('.markdown').css 'height', $('#markdown-preview').height() + 'px'

  $('.markdown').keyup ->
    $('#markdown-preview').html( converter.makeHtml( $('.markdown' ).val() ) )
    $('.markdown').css 'height', $('#markdown-preview').height() + 'px'
    return
  return
