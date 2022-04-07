using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace CRUDDemo.Controllers
{
	public class CRUDController : Controller 
	{
		public ActionResult create(){
			return View();
		}
[HttpPost]
		[ValidateAntiForgeryToken]
		public ActionResult Update(int Studentid, Student model)
		{
			using(var context = new demoCRUDEntities())
			{
				
				// Use of lambda expression to access
				// particular record from a database
				var data = context.Student.FirstOrDefault(x => x.StudentNo == Studentid);
				
				// Checking if any such record exist
				if (data != null)
				{
					data.Name = model.Name;
					data.Section = model.Section;
					data.EmailId = model.EmailId;
					data.Branch = model.Branch;
					context.SaveChanges();
					
					// It will redirect to
					// the Read method
					return RedirectToAction("Read");
				}
				else
					return View();
			}
		}
	}
}
