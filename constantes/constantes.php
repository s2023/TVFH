<?php
// estado categoria
const EC_ACTIVADA = 1;
const EC_DESACTIVADA = 2;
const EC_ELIMINADA = 1;

// estado pedido
const EP_CREADO = 1;
const EP_PAGADO = 2;
const EP_ENVIADO = 3;
const EP_ANULADO = 4;
const EP_DEVUELTO = 5;
const EP_FINALIZADO = 6;

// estado producto
const EPR_ACTIVADO = 1;
const EPR_DESACTIVADO = 2;
const EPR_BORRADOR = 3;
const EPR_ELIMINADO = 4;

// estado usuario
const EU_ACTIVADO = 1;
const EU_DESACTIVADO = 1;
const EU_ELIMINADO = 1;

// tipo documento
const TD_CC = 1;
const TD_NIT = 2;
const TD_PA = 3;
const TD_CE = 4;
const TD_DNI = 5;
const TD_PEP = 6;

// tipo usuario
const TU_ADMIN = 1;
const TU_CLIENTE = 2;

// visibilidad producto
const VP_PUBLICO = 1;
const VP_PRIVADO = 2;