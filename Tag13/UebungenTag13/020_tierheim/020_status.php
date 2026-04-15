<?php

// AUFGABE 2: TIERHEIM MIT STATUS
//
// Erstelle eine Klasse mit dem Namen TierheimTier.
//
// Eigenschaften:
// - name
// - art
// - vermittelt
//
// name und art sollen string sein.
// vermittelt soll bool sein.
//
// vermittelt soll direkt am Anfang false sein.
//
// Im Konstruktor sollen nur name und art übergeben werden.
// vermittelt bleibt erstmal automatisch false.
//
// Erstelle eine Methode status().
// Die Methode soll einen Text zurückgeben.
//
// Wenn vermittelt false ist:
// "Milo sucht noch ein Zuhause."
//
// Wenn vermittelt true ist:
// "Milo wurde bereits vermittelt."
//
// Erstelle ein Objekt:
// $milo = new TierheimTier("Milo", "Katze");
//
// Gib den Status mit echo aus.
//
// Danach ändere den Wert direkt:
// $milo->vermittelt = true;
//
// Gib den Status nochmal mit echo aus.