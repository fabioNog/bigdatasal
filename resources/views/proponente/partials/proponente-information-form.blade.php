<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Formulário Proponentes') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Insira as informações dos Proponentes.") }}
        </p>
    </header>

    <form method="post" action="{{ route('proponentes.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div>
                <x-input-label for="codigo" :value="__('Código')" />
                <x-text-input id="codigo" name="codigo" type="number" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('codigo')" />
            </div>

            <div>
                <x-input-label for="nome" :value="__('Nome')" />
                <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('nome')" />
            </div>

            <div>
                <x-input-label for="cnpj" :value="__('CNPJ')" />
                <x-text-input id="cnpj" name="cnpj" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cnpj')" />
            </div>

            <div>
                <x-input-label for="ENDERECO" :value="__('Endereço')" />
                <x-text-input id="ENDERECO" name="ENDERECO" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ENDERECO')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CEP" :value="__('CEP')" />
                <x-text-input id="CEP" name="CEP" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CEP')" />
            </div>


            <!-- Fone -->
            <div>
                <x-input-label for="fone" :value="__('Fone')" />
                <x-text-input id="fone" name="fone" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('fone')" />
            </div>

            <!-- Email -->
            <div class="col-span-3">
                <x-input-label for="EMAIL" :value="__('E-mail')" />
                <x-text-input id="EMAIL" name="EMAIL" type="text" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('EMAIL')" />
            </div>

            <!-- Ucontrato -->
            <div>
                <x-input-label for="ucontrato" :value="__('Ucontrato')" />
                <input id="ucontrato" name="ucontrato" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ucontrato')" />
            </div>

            <!-- Ramo -->
            <div>
                <x-input-label for="ramo" :value="__('Ramo')" />
                <x-text-input id="ramo" name="ramo" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ramo')" />
            </div>

            <!-- Scnpj -->
            <div>
                <x-input-label for="scnpj" :value="__('Scnpj')" />
                <x-text-input id="scnpj" name="scnpj" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('scnpj')" />
            </div>

            <!-- Fundacao -->
            <div>
                <x-input-label for="fundacao" :value="__('Fundacao')" />
                <input id="fundacao" name="fundacao" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('fundacao')" />
            </div>

            <!-- Socio1 -->
            <div>
                <x-input-label for="socio1" :value="__('Socio1')" />
                <x-text-input id="socio1" name="socio1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('socio1')" />
            </div>

            <!-- Socio2 -->
            <div>
                <x-input-label for="socio2" :value="__('Socio2')" />
                <x-text-input id="socio2" name="socio2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('socio2')" />
            </div>

            <!-- Socio3 -->
            <div>
                <x-input-label for="socio3" :value="__('Socio3')" />
                <x-text-input id="socio3" name="socio3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('socio3')" />
            </div>

            <!-- Socio4 -->
            <div>
                <x-input-label for="socio4" :value="__('Socio4')" />
                <x-text-input id="socio4" name="socio4" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('socio4')" />
            </div>


            <!-- SCPF1 -->
            <div>
                <x-input-label for="scpf1" :value="__('SCPF1')" />
                <x-text-input id="scpf1" name="scpf1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('scpf1')" />
            </div>

            <!-- SCPF2 -->
            <div>
                <x-input-label for="scpf2" :value="__('SCPF2')" />
                <x-text-input id="scpf2" name="scpf2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('scpf2')" />
            </div>

            <!-- SCPF3 -->
            <div>
                <x-input-label for="scpf3" :value="__('SCPF3')" />
                <x-text-input id="scpf3" name="scpf3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('scpf3')" />
            </div>

            <!-- SCPF4 -->
            <div>
                <x-input-label for="scpf4" :value="__('SCPF4')" />
                <x-text-input id="scpf4" name="scpf4" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('scpf4')" />
            </div>

            <!-- SPER1 -->
            <div>
                <x-input-label for="sper1" :value="__('SPER1')" />
                <x-text-input id="sper1" name="sper1" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('sper1')" />
            </div>

            <!-- SPER2 -->
            <div>
                <x-input-label for="sper2" :value="__('SPER2')" />
                <x-text-input id="sper2" name="sper2" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('sper2')" />
            </div>

            <!-- SPER3 -->
            <div>
                <x-input-label for="sper3" :value="__('SPER3')" />
                <x-text-input id="sper3" name="sper3" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('sper3')" />
            </div>

            <!-- SPER4 -->
            <div>
                <x-input-label for="sper4" :value="__('SPER4')" />
                <x-text-input id="sper4" name="sper4" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('sper4')" />
            </div>


            <!-- Faturamento -->
            <div>
                <x-input-label for="faturamento" :value="__('Faturamento')" />
                <x-text-input id="faturamento" name="faturamento" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('faturamento')" />
            </div>

            <!-- Desrecur -->
            <div>
                <x-input-label for="desrecur" :value="__('Desrecur')" />
                <x-text-input id="desrecur" name="desrecur" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('desrecur')" />
            </div>

            <!-- Pmeses -->
            <div>
                <x-input-label for="pmeses" :value="__('Pmeses')" />
                <x-text-input id="pmeses" name="pmeses" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('pmeses')" />
            </div>

            <!-- Fatdoze -->
            <div>
                <x-input-label for="fatdoze" :value="__('Fatdoze')" />
                <x-text-input id="fatdoze" name="fatdoze" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('fatdoze')" />
            </div>

            <!-- Coligada1 -->
            <div>
                <x-input-label for="coligada1" :value="__('Coligada1')" />
                <x-text-input id="coligada1" name="coligada1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('coligada1')" />
            </div>

            <!-- Coligada2 -->
            <div>
                <x-input-label for="coligada2" :value="__('Coligada2')" />
                <x-text-input id="coligada2" name="coligada2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('coligada2')" />
            </div>

            <!-- Coligada3 -->
            <div>
                <x-input-label for="coligada3" :value="__('Coligada3')" />
                <x-text-input id="coligada3" name="coligada3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('coligada3')" />
            </div>

            <!-- Coligada4 -->
            <div>
                <x-input-label for="coligada4" :value="__('Coligada4')" />
                <x-text-input id="coligada4" name="coligada4" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('coligada4')" />
            </div>

            <!-- Cocnpj1 -->
            <div>
                <x-input-label for="cocnpj1" :value="__('Cocnpj1')" />
                <x-text-input id="cocnpj1" name="cocnpj1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cocnpj1')" />
            </div>

            <!-- Cocnpj2 -->
            <div>
                <x-input-label for="cocnpj2" :value="__('Cocnpj2')" />
                <x-text-input id="cocnpj2" name="cocnpj2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cocnpj2')" />
            </div>

            <!-- Cocnpj3 -->
            <div>
                <x-input-label for="cocnpj3" :value="__('Cocnpj3')" />
                <x-text-input id="cocnpj3" name="cocnpj3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cocnpj3')" />
            </div>

            <!-- Cocnpj4 -->
            <div>
                <x-input-label for="cocnpj4" :value="__('Cocnpj4')" />
                <x-text-input id="cocnpj4" name="cocnpj4" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cocnpj4')" />
            </div>

            <!-- Publica -->
            <div>
                <x-input-label for="publica" :value="__('Publica')" />
                <x-text-input id="publica" name="publica" type="text" class="mt-1 block w-full" maxlength="3" required />
                <x-input-error class="mt-2" :messages="$errors->get('publica')" />
            </div>

            <!-- Ubalacao -->
            <div>
                <x-input-label for="ubalacao" :value="__('Ubalacao')" />
                <input id="ubalacao" name="ubalacao" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ubalacao')" />
            </div>

            <!-- Cliente1 -->
            <div>
                <x-input-label for="cliente1" :value="__('Cliente1')" />
                <x-text-input id="cliente1" name="cliente1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cliente1')" />
            </div>

            <!-- Cliente2 -->
            <div>
                <x-input-label for="cliente2" :value="__('Cliente2')" />
                <x-text-input id="cliente2" name="cliente2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cliente2')" />
            </div>

            <!-- Cliente3 -->
            <div>
                <x-input-label for="cliente3" :value="__('Cliente3')" />
                <x-text-input id="cliente3" name="cliente3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('cliente3')" />
            </div>

            <!-- Forn1 -->
            <div>
                <x-input-label for="forn1" :value="__('Forn1')" />
                <x-text-input id="forn1" name="forn1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('forn1')" />
            </div>

            <!-- Forn2 -->
            <div>
                <x-input-label for="forn2" :value="__('Forn2')" />
                <x-text-input id="forn2" name="forn2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('forn2')" />
            </div>

            <!-- Forn3 -->
            <div>
                <x-input-label for="forn3" :value="__('Forn3')" />
                <x-text-input id="forn3" name="forn3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('forn3')" />
            </div>

            <!-- Banco1 -->
            <div>
                <x-input-label for="banco1" :value="__('Banco1')" />
                <x-text-input id="banco1" name="banco1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('banco1')" />
            </div>

            <!-- Banco2 -->
            <div>
                <x-input-label for="banco2" :value="__('Banco2')" />
                <x-text-input id="banco2" name="banco2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('banco2')" />
            </div>

            <!-- Banco3 -->
            <div>
                <x-input-label for="banco3" :value="__('Banco3')" />
                <x-text-input id="banco3" name="banco3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('banco3')" />
            </div>

            <!-- Ag1 -->
            <div>
                <x-input-label for="ag1" :value="__('Ag1')" />
                <x-text-input id="ag1" name="ag1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ag1')" />
            </div>

            <!-- Ag2 -->
            <div>
                <x-input-label for="ag2" :value="__('Ag2')" />
                <x-text-input id="ag2" name="ag2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ag2')" />
            </div>

            <!-- Ag3 -->
            <div>
                <x-input-label for="ag3" :value="__('Ag3')" />
                <x-text-input id="ag3" name="ag3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ag3')" />
            </div>

        </div>

        <div class="flex items-center gap-4 mt-6">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
        </div>
    </form>
</section>
