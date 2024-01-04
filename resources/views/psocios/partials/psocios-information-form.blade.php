<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Formulário Psocios') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Insira as informações dos Psocios.") }}
        </p>
    </header>

    <form method="post" action="{{ route('psocios.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div>
                <x-input-label for="CODIGO" :value="__('Código')" />
                <x-text-input id="CODIGO" name="CODIGO" type="text" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('CODIGO')" />
            </div>

            <div>
                <x-input-label for="NOME" :value="__('Nome')" />
                <x-text-input id="NOME" name="NOME" type="text" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('NOME')" />
            </div>

            <div>
                <x-input-label for="CPF" :value="__('CPF')" />
                <x-text-input id="CPF" name="CPF" type="text" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('CPF')" />
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

            <div class="col-span-3">
                <x-input-label for="COMPLE" :value="__('Complemento')" />
                <x-text-input id="COMPLE" name="COMPLE" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('COMPLE')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CELULAR" :value="__('Celular')" />
                <x-text-input id="CELULAR" name="CELULAR" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CELULAR')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="EMAIL" :value="__('E-mail')" />
                <x-text-input id="EMAIL" name="EMAIL" type="text" class="mt-1 block w-full"  />
                <x-input-error class="mt-2" :messages="$errors->get('EMAIL')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="NASCIONAL" :value="__('Nacionalidade')" />
                <x-text-input id="NASCIONAL" name="NASCIONAL" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('NASCIONAL')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="NATURAD" :value="__('Natureza')" />
                <x-text-input id="NATURAD" name="NATURAD" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('NATURAD')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="RGD" :value="__('RGD')" />
                <x-text-input id="RGD" name="RGD" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('RGD')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CNH" :value="__('CNH')" />
                <x-text-input id="CNH" name="CNH" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CNH')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="PAI" :value="__('Pai')" />
                <x-text-input id="PAI" name="PAI" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('PAI')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="MAE" :value="__('Mãe')" />
                <x-text-input id="MAE" name="MAE" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('MAE')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="ATIVIDADE" :value="__('Atividade')" />
                <x-text-input id="ATIVIDADE" name="ATIVIDADE" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ATIVIDADE')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="TRABALHO" :value="__('Trabalho')" />
                <x-text-input id="TRABALHO" name="TRABALHO" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('TRABALHO')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="TRAENDERECO" :value="__('Endereço Trabalho')" />
                <x-text-input id="TRAENDERECO" name="TRAENDERECO" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('TRAENDERECO')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="TRAFONE" :value="__('Telefone Trabalho')" />
                <x-text-input id="TRAFONE" name="TRAFONE" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('TRAFONE')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="TRAEMAIL" :value="__('E-mail Trabalho')" />
                <x-text-input id="TRAEMAIL" name="TRAEMAIL" type="text" class="mt-1 block w-full"  />
                <x-input-error class="mt-2" :messages="$errors->get('TRAEMAIL')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="TRAATIVIDADE" :value="__('Atividade Trabalho')" />
                <x-text-input id="TRAATIVIDADE" name="TRAATIVIDADE" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('TRAATIVIDADE')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="SOCIONOME1" :value="__('Nome do Sócio 1')" />
                <x-text-input id="SOCIONOME1" name="SOCIONOME1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('SOCIONOME1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="SOCIONOME2" :value="__('Nome do Sócio 2')" />
                <x-text-input id="SOCIONOME2" name="SOCIONOME2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('SOCIONOME2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CNPJ1" :value="__('CNPJ 1')" />
                <x-text-input id="CNPJ1" name="CNPJ1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CNPJ1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CNPJ2" :value="__('CNPJ 2')" />
                <x-text-input id="CNPJ2" name="CNPJ2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CNPJ2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="PART1" :value="__('Participação 1')" />
                <x-text-input id="PART1" name="PART1" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('PART1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="PART2" :value="__('Participação 2')" />
                <x-text-input id="PART2" name="PART2" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('PART2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="IENDERECO1" :value="__('Endereço 1')" />
                <x-text-input id="IENDERECO1" name="IENDERECO1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('IENDERECO1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="IENDERECO2" :value="__('Endereço 2')" />
                <x-text-input id="IENDERECO2" name="IENDERECO2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('IENDERECO2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="IENDERECO3" :value="__('Endereço 3')" />
                <x-text-input id="IENDERECO3" name="IENDERECO3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('IENDERECO3')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="MATRICULA1" :value="__('Matrícula 1')" />
                <x-text-input id="MATRICULA1" name="MATRICULA1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('MATRICULA1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="MATRICULA2" :value="__('Matrícula 2')" />
                <x-text-input id="MATRICULA2" name="MATRICULA2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('MATRICULA2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="MATRICULA3" :value="__('Matrícula 3')" />
                <x-text-input id="MATRICULA3" name="MATRICULA3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('MATRICULA3')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="REGISTRO1" :value="__('Registro 1')" />
                <x-text-input id="REGISTRO1" name="REGISTRO1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('REGISTRO1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="REGISTRO2" :value="__('Registro 2')" />
                <x-text-input id="REGISTRO2" name="REGISTRO2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('REGISTRO2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="REGISTRO3" :value="__('Registro 3')" />
                <x-text-input id="REGISTRO3" name="REGISTRO3" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('REGISTRO3')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CARRO1" :value="__('Carro 1')" />
                <x-text-input id="CARRO1" name="CARRO1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CARRO1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="CARRO2" :value="__('Carro 2')" />
                <x-text-input id="CARRO2" name="CARRO2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('CARRO2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="ANOMOD1" :value="__('Ano Modelo 1')" />
                <x-text-input id="ANOMOD1" name="ANOMOD1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ANOMOD1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="ANOMOD2" :value="__('Ano Modelo 2')" />
                <x-text-input id="ANOMOD2" name="ANOMOD2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('ANOMOD2')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="PLACA1" :value="__('Placa 1')" />
                <x-text-input id="PLACA1" name="PLACA1" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('PLACA1')" />
            </div>

            <div class="col-span-3">
                <x-input-label for="PLACA2" :value="__('Placa 2')" />
                <x-text-input id="PLACA2" name="PLACA2" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('PLACA2')" />
            </div>

        </div>

        <div class="flex items-center gap-4 mt-6">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
        </div>
    </form>
</section>
