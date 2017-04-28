			<?php

			/*
			|--------------------------------------------------------------------------
			| Web Routes
			|--------------------------------------------------------------------------|
			| Here is where you can register web routes for your application. These
			| routes are loaded by the RouteServiceProvider within a group which
			| contains the "web" middleware group. Now create something great!
			|
			*/
				use Illuminate\Http\Request;

				use App\Customer;
				use App\Service;
				Route::get('/', function () {
				$service = Service::all();
				$customers = Customer::with(['service'])->get();


			    return view('welcome', compact('service','customers'));
			});

			Route::post('/save', function (Request $request) {
				 $response = array();
					if ($request->type==0){

						$request->firstname='Anonymous';
						$request->lastname='Anonymous';
						$request->title='Anonymous';
						 $validator = Validator::make($request->all(), [
			        'title' => '',
			        'firstname' => '',
			        'lastname' => '',
			        'type' => 'required',
			        'service_id' => 'required',
			        ]);
					}

					else if ($request->type==2){
						 $validator = Validator::make($request->all(), [
			        //'title' => 'required',
			        'firstname' => 'required|min:4',
			       // 'lastname' => 'required|min:4',
			        'type' => 'required',
			        'service_id' => 'required',
			        ]);
				}
					
					else {

						 $validator = Validator::make($request->all(), [
			        'title' => 'required',
			        'firstname' => 'required|min:4',
			        'lastname' => 'required|min:4',
			        'type' => 'required',
			        'service_id' => 'required',
			        ]);
				}			

					if ($validator->fails()) {
			           $response = array(
                'success' => 0 ,
                'message' => "All fields are required"
            );
			        }

			        else {
			      $customer = new Customer();
				  $customer->firstname=$request->firstname;
				  $customer->title=$request->title;
				  $customer->lastname=$request->lastname;
				  $customer->service_id=$request->service_id;
				  $customer->type=$request->type;
				  $customer->save();

            $response = array(
                'success' => 1 ,
                'message' => "Your details have being saved."



            );

        }

        return response()->json(compact('response'));

				 
			    
			});

			/*Route::put('{id}/update', function (Request $request, $id) {
				$validator = Validator::make($request->all(), [
			        'title' => 'required',
			        'firstname' => 'required',
			        'lastname' => 'required',
			        'type' => 'required',
			        'service_id' => 'required',
			        ]);
					if ($validator->fails()) {
			            return redirect('/')
			                        ->withErrors($validator)
			                        ->withInput();
			        }
				 $customer =  Custom::where('id',$id)->first();
				  $customer->firstname=$request->firstname;
				  $customer->title=$request->title;
				  $customer->lastname=$request->lastname;
				  $customer->service_id=$request->service_id;
				  $customer->type=$request->type;
				  $customer->save();

			    return redirect()->back();
			});*/

			/*Route::get('{id}/delete', function (Request $request, $id) {

				$customer = Customer::where('id', $id)->first();
				$customer->delete();

				return redirect()->back();

			});*/