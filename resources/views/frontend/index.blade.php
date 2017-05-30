@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-file-text-o"></i> Gerar Certidão/Despacho</div>
                    {{ Form::open(['route' => 'frontend.get', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'documentform', 'onsubmit' => 'this.submit(); this.reset(); return false;']) }}
                        <div class="panel-body">
                        <div class="form-group">
                            {{ Form::label('processo', 'Processo Administrativo', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('processo') ? 'has-error' : '' }}">
                                {{ Form::text('processo', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Processo Administrativo']) }}
                                @if($errors->has('processo'))
				                    {{ $errors->first('processo') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('nome', 'Nome', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('nome') ? 'has-error' : '' }}">
                                {{ Form::text('nome', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Nome']) }}
                                @if($errors->has('nome'))
				                    {{ $errors->first('nome') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
        
                        <div class="form-group">
                            {{ Form::label('cpfcnpj', 'CPF/CNPJ', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('cpfcnpj') ? 'has-error' : '' }}">
                                {{ Form::text('cpfcnpj', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'CPF/CNPJ']) }}
                                @if($errors->has('cpfcnpj'))
				                    {{ $errors->first('cpfcnpj') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('doe', 'DOE', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('doe') ? 'has-error' : '' }}">
                                {{ Form::text('doe', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'DOE']) }}
                                @if($errors->has('doe'))
				                    {{ $errors->first('doe') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('datadoe', 'Data DOE', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('datadoe') ? 'has-error' : '' }}">
                                {{ Form::text('datadoe', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Data DOE']) }}
                                @if($errors->has('datadoe'))
				                    {{ $errors->first('datadoe') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('ait', 'Auto de Infração', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('ait') ? 'has-error' : '' }}">
                                {{ Form::text('ait', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Auto de Infração']) }}
                                @if($errors->has('ait'))
				                    {{ $errors->first('ait') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('aitvenc', 'Vencimento Auto de Infração', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('aitvenc') ? 'has-error' : '' }}">
                                {{ Form::text('aitvenc', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Vencimento Auto de Infração']) }}
                                @if($errors->has('aitvenc'))
				                    {{ $errors->first('aitvenc') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="form-group">
                            {{ Form::label('valor', 'Valor', ['class' => 'col-lg-2 control-label']) }}
        
                            <div class="col-lg-10 {{ $errors->has('valor') ? 'has-error' : '' }}">
                                {{ Form::text('valor', null, ['class' => 'form-control', 'maxlength' => '191', 'autofocus' => 'autofocus', 'placeholder' => 'Valor']) }}
                                @if($errors->has('valor'))
				                    {{ $errors->first('valor') }}
				                @endif
                            </div><!--col-lg-10-->
                        </div><!--form control-->
                        
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="pull-right">
                                    {{ Form::submit('Gerar Documento', ['class' => 'btn btn-success btn-xs']) }}
                                </div><!--pull-right-->
                
                                <div class="clearfix"></div>
                            </div><!-- /.box-body -->
                        </div><!--box-->
                        
                    {{ Form::close() }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection

@section('after-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#nome').keyup(function() {
              var currVal = $(this).val();
              $(this).val(currVal.toUpperCase());
            });
            
            $('#cpfcnpj').mask('00000000000000');
            $('#doe').mask('00000');
            $('#datadoe').mask('00/00/0000', {clearIfNotMatch: true});
            $('#aitvenc').mask('00/00/0000', {clearIfNotMatch: true});
            $('#valor').mask('000.000.000.000.000,00', {reverse: true});
            $('#ait').keyup(function() {
              var currVal = $(this).val();
              $(this).val(currVal.toUpperCase());
            });
        });
    </script>
@endsection