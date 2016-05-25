/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('#botonIngresar').click(function () {
        $('#contenedor, #contenedorFormIniciar').fadeIn(1000);
        $('#contenedorFormRegistrarse , #contenedorAyuda').fadeOut(1000);
    });
    $('#contenedor').click(function () {
        $('#contenedor, #contenedorFormIniciar').fadeOut(1000);
    });
    $('#botonRegistrarse').click(function () {
        $('#contenedor, #contenedorFormRegistrarse').fadeIn(1000);
        $('#contenedorFormIniciar , #contenedorAyuda').fadeOut(1000);
    });
    $('#contenedor').click(function () {
        $('#contenedor, #contenedorFormRegistrarse').fadeOut(1000);
    });
    $('#botonAyuda').click(function () {
        $('#contenedor, #contenedorAyuda').fadeIn(1000);
    });
    $('#contenedor').click(function () {
        $('#contenedor, #contenedorAyuda').fadeOut(1000);
    });
});

