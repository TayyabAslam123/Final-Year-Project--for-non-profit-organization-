



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            </div>
            <div class="modal-body">
                    <h1>Donate Now</h1>
                    {!! Form::open(['action' => 'DonationsController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('amount', 'Amount')}}
                            {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'ENTER THE AMOUNT '])}}
                        </div>
                        <div class="form-group">
                            {{Form::hidden('campaign_id', $campaigns->id, ['class' => 'form-control', 'placeholder' => 'campaign_id'])}}
                        </div>
                        
                        {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}
                    
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</body>
</html>                            




