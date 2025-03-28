<div class="card mb-3">
    <div class="card-body text-secondary">
        <h5 class="card-title fs-4 fw-bold mb-0 text-black">{{ $title }}</h5>
        <p class="card-text mb-2">({{ $originalTitle }})</p>
        <p class="card-text">{{ $nationality }}</p>
        <p class="card-text text-uppercase">{{ $date }}</p>
    </div>
    <div class="card-text p-3 bg-primary-subtle text-primary-emphasis d-flex align-items-center">
        <div class="me-2">
            <!-- Ciclo che controlla il voto inserito e stampa a schermo le stelle piene, mezze o vuote in base ad esso -->
            @for ($i = 1; $i <= 10; $i++)
                @if ($vote >= $i)
                    <i class="fas fa-star" style="color: #0D6EFD;"></i> <!-- Stella piena -->
                @elseif ($vote >= $i - 0.5)
                    <i class="fas fa-star-half-alt" style="color: #0D6EFD;"></i> <!-- Mezza stella -->
                @else
                    <i class="far fa-star" style="color: #0D6EFD;"></i> <!-- Stella vuota -->
                @endif
            @endfor
        </div>
        <span class="fw-bold ms-2" style="color: #0D6EFD;">({{ $vote }})</span>
    </div>
</div>