use actix_web::{delete, get, post, put, patch, HttpResponse};
use tera::Context;
use crate::TERA;

#[get("/")]
async fn index() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM");
  context.insert("header_text", "SzM");

  let body = TERA.render("pages/index.html", &context).expect("Failed to render index.html");

  HttpResponse::Ok().body(body)
}

#[get("/ueber-mich")]
async fn ueber_mich() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "SzM — Über mich");
  context.insert("header_text", "Über mich");

  let body = TERA.render("pages/ueber-mich.html", &context).expect("Failed to render index.html");

  HttpResponse::Ok().body(body)
}
