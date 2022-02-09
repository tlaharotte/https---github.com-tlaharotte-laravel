<html>
    <body>
        <div>
            {{ $voiture->getMarque()}}
            {{ $concession->montrerGarage()}}
            <p>Prix total : </p>{{ $facture->montrerFacture()}}
        </div>
    </body>
</html>