<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
use Session; 
use App\User;
use App\OrderHeader;
use App\OrderDetail;
class OrderHeaderController extends Controller{
    
    public function index(Request $request)
	{
        $data['users']=OrderHeader::get();
        $data['count'] = 1;
        return view('order_header.index', $data);
    }
	//index

    public function AddOrderHeader(Request $request)
	{
        if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'internal_order_number' 	=> 'required|unique:order_headers|max:50', 
											'status' 					=> 'required|max:50', 
											'current_location_facility' => 'required|max:50', 
											'priority' 					=> 'required|max:50', 
											'order_generation_date' 	=> 'required|max:50', 
											'schedule_delivery_date' 	=> 'required|max:50', 
											'shipto_city' 				=> 'required|max:50', 
											'shipto_state' 				=> 'required|max:50',
											'shipto_country' 			=> 'required|max:50',
											]);
											
             $input						=$request->input();
             $order_header				=new OrderHeader;
             $order_header->internal_order_number		=$input['internal_order_number'];
             $order_header->status						=$input['status'];  
			 //$order_header->current_location_facility	=$input['current_location_facility'];  
			 //$order_header->priority					=$input['priority'];  
			 $order_header->order_generation_date		=$input['order_generation_date'];  
			 $order_header->schedule_delivery_date		=$input['schedule_delivery_date'];  
			 $order_header->shipto_city					=$input['shipto_city'];  
			 $order_header->shipto_state				=$input['shipto_state'];
			 $order_header->shipto_country				=$input['shipto_country'];			 
             $order_header->created_by					=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Order Headers Created successfully!'); 
			return redirect('OrderHeaders');
        }
        $data['count'] = 1;
        return view('order_header.add', $data);
	}
	
	public function GeneralOrderHeader(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'order_type' 			=> 'required|max:50',
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'internal_order_number' => 'required|max:50', 
											]);
             $input									=$request->input();
             $order_header							=OrderHeader::find($id);
             $order_header->order_id				=$input['order_id'];
             $order_header->order_type				=$input['order_type'];  
			 $order_header->internal_order_number	=$input['internal_order_number'];  
             $order_header->updated_by				=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Order Headers Updated successfully!'); 
			 return redirect('OrderHeaders');
        }
		$data['active_url']	  = 'general';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.general', $data);
	}
	
	public function GeneralEdit(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'order_type' 			=> 'required|max:50',
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'payment_type' 			=> 'required|max:50', 
											'internal_order_number' => 'required|max:50', 
											]);
             $input									=$request->input();
             $order_header							=OrderHeader::find($id);
			 $order_header->order_type				=$input['order_type'];  
             $order_header->payment_type			=$input['payment_type'];
			 $order_header->order_generation_date	=$input['order_generation_date'];
			 $order_header->order_allocation_date	=$input['order_allocation_date'];
			 $order_header->internal_order_number	=$input['internal_order_number'];  
             $order_header->updated_by				=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'General Details Updated successfully!'); 
			 return redirect()->back();
        }
		$data['active_url']	  = 'general';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.general_edit', $data);
	}
	
	public function PickupDelivery(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'schedule_delivery_date' 	=> 'required|max:50',
											'delivery_date' 			=> 'required|max:50', 
											]);
             $input									=$request->input();
             $order_header							=OrderHeader::find($id);
             $order_header->schedule_delivery_date	=$input['schedule_delivery_date'];
             $order_header->delivery_date			=$input['delivery_date'];  
             $order_header->updated_by				=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Pickup/Delivery Updated successfully!'); 
			 return redirect()->back();
        }
		$data['active_url']	  	= 'pickup-delivery';
        $data['count'] 		  	= 1;
        $data['order_header'] 	= OrderHeader::find($id);
		$data['order_details']  = OrderDetail::where('order_header_id',$id)->get();
        return view('order_header.pickup_delivery', $data);
	}
	
	public function Fulfillment(Request $request, $id)
	{	
		$data['active_url']	  = 'fulfillment';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.fulfillment', $data);
	}
	
	public function FulfillmentEdit(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'ship_to_name' 			=> 'required|max:50',
											'shipto_addr1' 			=> 'required|max:50', 
											'shipto_addr2' 			=> 'required|max:50', 
											'shipto_city' 			=> 'required|max:50', 
											'shipto_state' 			=> 'required|max:50', 
											'shipto_country' 		=> 'required|max:50', 
											'shipto_zip' 			=> 'required|max:50', 
											]);
             $input									=$request->input();
             $order_header							=OrderHeader::find($id);
             $order_header->ship_to_name			=$input['ship_to_name'];
             $order_header->shipto_addr1			=$input['shipto_addr1'];  
			 $order_header->shipto_addr2			=$input['shipto_addr2'];
			 $order_header->shipto_city				=$input['shipto_city'];
			 $order_header->shipto_state			=$input['shipto_state'];
			 $order_header->shipto_country			=$input['shipto_country'];
			 $order_header->shipto_zip				=$input['shipto_zip'];
             $order_header->updated_by				=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Fulfilment Details Updated successfully!'); 
			 return redirect()->back();
        }
		$data['active_url']	  = 'fulfillment';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.fulfillment_edit', $data);
	}
	
	public function Shipping(Request $request, $id)
	{	
		$data['active_url']	  = 'shipping';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.shipping', $data);
	}
	
	public function ShippingEdit(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'shipto' 						 	=> 'required|max:50', 
											'service_level' 					=> 'required|max:50', 
											'shipping_cost' 					=> 'required|max:50', 
											'ship_date' 						 => 'required|max:50', 
											'delivery_instruction_from_customer' => 'required|max:50', 
											]);
             $input												=$request->input();
             $order_header										=OrderHeader::find($id);
             $order_header->shipto								=$input['shipto'];
             $order_header->service_level						=$input['service_level'];  
			 $order_header->shipping_cost						=$input['shipping_cost'];  
			 $order_header->ship_date							=$input['ship_date'];  
			 $order_header->delivery_instruction_from_customer	=$input['delivery_instruction_from_customer'];  
             $order_header->updated_by							=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Shipping Details Updated successfully!'); 
			 return redirect()->back();
        }
		$data['active_url']	  = 'shipping';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.shipping_edit', $data);
	}
	
	public function Misc(Request $request, $id)
	{	
		
		$data['active_url']	  = 'misc';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.misc', $data);
	}
	
	public function MiscEdit(Request $request, $id)
	{	
		if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'special_ins_code1' 			=> 'required|max:50',
											'special_ins_code2' 			=> 'required|max:50', 
											'special_ins_code3' 			=> 'required|max:50', 
											'special_ins_code4' 			=> 'required|max:50', 
											'special_ins_code5' 			=> 'required|max:50', 
											]);
             $input											=$request->input();
             $order_header									=OrderHeader::find($id);
             $order_header->special_ins_code1				=$input['special_ins_code1'];
			 $order_header->special_ins_code2				=$input['special_ins_code2'];
			 $order_header->special_ins_code3				=$input['special_ins_code3'];
             $order_header->special_ins_code4				=$input['special_ins_code4'];  
			 $order_header->special_ins_code5				=$input['special_ins_code5'];  
             $order_header->updated_by						=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Misc Updated successfully!'); 
			 return redirect()->back();
        }
		$data['active_url']	  = 'misc';
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
        return view('order_header.misc_edit', $data);
	}
	
	public function OrderLines(Request $request, $id)
	{	
		
		$data['active_url']	  		= 'order-lines';
        $data['count'] 		 	 	= 1;
        $data['order_detail'] 		= OrderDetail::where('order_header_id',$id)->select('*')->orderBy('id','DESC')->get();
		$data['order_header'] 		= OrderHeader::find($id);
        return view('order_header.order_lines', $data);
	}
	
	public function AddLines(Request $request, $id)
	{
        if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'item_number' 			=> 'required|max:50', 
											'order_qty' 			=> 'required|max:50', 
											'line_status' 			=> 'required|max:50', 
											'line_type' 			=> 'required|max:50', 
											'vendor_po' 			=> 'required|max:50', 
											'scheduled_pickup_date' => 'required|max:50', 
											'actual_pickup_date' 	=> 'required|max:50', 
											]);
             $input									=$request->input();
			 $order_detail			 				=new OrderDetail;
             $order_detail->order_header_id			=$id;
             $order_detail->item_number				=$input['item_number'];  
			 $order_detail->order_qty				=$input['order_qty'];  
			 $order_detail->line_status				=$input['line_status'];  
			 $order_detail->line_type				=$input['line_type'];  
			 $order_detail->vendor_po				=$input['vendor_po'];  
			 $order_detail->scheduled_pickup_date	=$input['scheduled_pickup_date'];  
			 $order_detail->actual_pickup_date		=$input['actual_pickup_date'];  
             $order_detail->updated_by				=Auth::user()->id;
             $order_detail->save();
             Session::flash('success', 'Order Line Added Successfully!'); 
			 return redirect('OrderHeaders/order-lines/'.$id);
        }
		$data['active_url']	  		= 'order-lines';
        $data['count'] 		 		= 1;
        $data['order_header'] 		= OrderHeader::find($id);
        return view('order_header.add_lines', $data);
	}
	
	public function EditLines(Request $request, $id)
	{
		$order_detail 		= OrderDetail::find($id);
		if(is_object($order_detail) && !empty($order_detail))
		{
			if($request->method()=="POST")
			{
				$validated = $request->validate([  
												'item_number' 			=> 'required|max:50', 
												'order_qty' 			=> 'required|max:50', 
												'line_status' 			=> 'required|max:50', 
												'line_type' 			=> 'required|max:50', 
												'vendor_po' 			=> 'required|max:50', 
												'scheduled_pickup_date' => 'required|max:50', 
												'actual_pickup_date' 	=> 'required|max:50', 
												]);
				 $input									=$request->input();
				 $order_detail->item_number				=$input['item_number'];  
				 $order_detail->order_qty				=$input['order_qty'];  
				 $order_detail->line_status				=$input['line_status'];  
				 $order_detail->line_type				=$input['line_type'];  
				 $order_detail->vendor_po				=$input['vendor_po'];  
				 $order_detail->scheduled_pickup_date	=$input['scheduled_pickup_date'];  
				 $order_detail->actual_pickup_date		=$input['actual_pickup_date'];  
				 $order_detail->updated_by				=Auth::user()->id;
				 $order_detail->save();
				 Session::flash('success', 'Order Line Updated Successfully!'); 
				 return redirect('OrderHeaders/order-lines/'.$order_detail->order_header_id);
			}
			$data['active_url']	  		= 'order-lines';
			$data['count'] 		 		= 1;
			$data['order_details'] 		= $order_detail;
			$data['order_header'] 		= OrderHeader::find($order_detail->order_header_id);
		}
		else
		{
			return redirect()->back();
		}
        return view('order_header.edit_lines', $data);
	}
	
    public function Edit(Request $request, $id)
	{
        if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'order_id' 				=> 'required|max:50|unique:order_headers,order_id,'.$id,
											'order_type' 			=> 'required|max:50', 
											'internal_order_number' => 'required|max:50', 
											]);
             $input									=$request->input();
             $order_header							=OrderHeader::find($id);
             $order_header->order_id				=$input['order_id'];
             $order_header->order_type				=$input['order_type'];  
			 $order_header->internal_order_number	=$input['internal_order_number'];  
             $order_header->updated_by				=Auth::user()->id;
             $order_header->save();
             Session::flash('success', 'Order Headers Updated successfully!'); 
			 return redirect('OrderHeaders');
        }
        $data['count'] 		  = 1;
        $data['order_header'] = OrderHeader::find($id);
		//echo "<pre>"; print_r($data['order_header']); die;
        return view('order_header.edit', $data);
	}


	public function DeleteOrderHeader(Request $request, $id)
	{
		$check=User::where('dept_id',$id)->get();
		if (count($check)>0) 
		{
			Session::flash('error', 'Order Headers is assigned to user, please dis-associate to delete the Order Headers'); 
			return redirect('OrderHeaders');
		}
		$user=OrderHeaders::where('id', $id)->delete();  
		Session::flash('success', 'Order Headers Deleted successfully!'); 
       return redirect('OrderHeaders');
	}
}
