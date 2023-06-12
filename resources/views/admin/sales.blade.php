@extends('layouts.admin')

@section('title')
Inventory | Admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Inventory Details</h3>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class='btn btn-primary me-md-2' href="{{ route('inventories.create') }}">Add</a>
                    </div>
                </td>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
